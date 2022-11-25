importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');
   
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/

firebase.initializeApp({
    apiKey: "AIzaSyABIV6VR0yn4ulsxHf7a6XQV4oYOPhdEx8",
    authDomain: "onesignal23.firebaseapp.com",
    databaseURL: "https://onesignal23.firebaseio.com",
    projectId: "onesignal23",
    storageBucket: "onesignal23.appspot.com",
    messagingSenderId: "269188957497",
    appId: "1:269188957497:web:6ff1b2cf38b8e1292894e8"
  });
  
/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };
  
    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});