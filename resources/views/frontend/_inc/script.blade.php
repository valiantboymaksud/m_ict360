<script>
    // Initialize Firebase - https://firebase.google.com/docs/web/setup
    var config = {
        apiKey: "AIzaSyABIV6VR0yn4ulsxHf7a6XQV4oYOPhdEx8",
        authDomain: "onesignal23.firebaseapp.com",
        databaseURL: "https://onesignal23.firebaseio.com",
        projectId: "onesignal23",
        storageBucket: "onesignal23.appspot.com",
        messagingSenderId: "269188957497",
        appId: "1:269188957497:web:6ff1b2cf38b8e1292894e8"
    };
    firebase.initializeApp(config);

    const messaging = firebase.messaging();

    initFirebaseMessagingRegistration = () => {
        messaging.requestPermission()
            .then((permission) => {
                if (permission === 'granted') {
                    console.log('granted',messaging.getToken());
                }
                return messaging.getToken();
            })
            .then(function(token) {
                // send rest call to add to database
                console.log('FCM token', token);
                $.ajax({
                    url: '/api/subscriber',
                    method: 'POST',
                    data: {
                        fcm_token: token,
                    },
                    success: function(res) {
                        if (res.status) {
                            success(res.message)
                        } else {
                            warning(res.message)
                        }
                    }
                })
            })
            .catch(function(err) {
                console.log('Permission denied', err);
            });
    }

    $(document).on('click', '#onesignal-bell-container', initFirebaseMessagingRegistration)


    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });
</script>
