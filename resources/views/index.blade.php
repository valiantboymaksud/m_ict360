<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to Firebase Web Push Notification!</title>
    <link rel="stylesheet" href="{{ asset('css/custom.scss') }}">

</head>

<body>
    <img src="{{ asset('assets/images/push.gif') }}" width="100%" height="380">

    <div class="mb-2"></div>
    @include('frontend.notifications.index')



    <div id="onesignal-bell-container"
        class="onesignal-bell-container onesignal-reset onesignal-bell-container-bottom-left">
        <div id="onesignal-bell-launcher"
            class="onesignal-bell-launcher onesignal-bell-launcher-md onesignal-bell-launcher-bottom-left onesignal-bell-launcher-theme-default onesignal-bell-launcher-active"
            style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, Bangla436, sans-serif;">
            <div class="onesignal-bell-launcher-button"><svg class="onesignal-bell-svg"
                    xmlns="http://www.w3.org/2000/svg" width="99.7" height="99.7" viewBox="0 0 99.7 99.7"
                    style="filter: drop-shadow(0 2px 4px rgba(34,36,38,0.35));; -webkit-filter: drop-shadow(0 2px 4px rgba(34,36,38,0.35));;">
                    <circle class="background" cx="49.9" cy="49.9" r="49.9" style=""></circle>
                    <path class="foreground"
                        d="M50.1 66.2H27.7s-2-.2-2-2.1c0-1.9 1.7-2 1.7-2s6.7-3.2 6.7-5.5S33 52.7 33 43.3s6-16.6 13.2-16.6c0 0 1-2.4 3.9-2.4 2.8 0 3.8 2.4 3.8 2.4 7.2 0 13.2 7.2 13.2 16.6s-1 11-1 13.3c0 2.3 6.7 5.5 6.7 5.5s1.7.1 1.7 2c0 1.8-2.1 2.1-2.1 2.1H50.1zm-7.2 2.3h14.5s-1 6.3-7.2 6.3-7.3-6.3-7.3-6.3z"
                        style=""></path>
                    <ellipse class="stroke" cx="49.9" cy="49.9" rx="37.4" ry="36.9" style="">
                    </ellipse>
                </svg>
                <div class="pulse-ring" style=""></div>
            </div>
            <div class="onesignal-bell-launcher-badge" style=""></div>
            <div class="onesignal-bell-launcher-message">
                <div class="onesignal-bell-launcher-message-body">Subscribe to notifications</div>
            </div>
            <div class="onesignal-bell-launcher-dialog"
                style="filter: drop-shadow(0px 2px 2px rgba(34,36,38,.15));; -webkit-filter: drop-shadow(0px 2px 2px rgba(34,36,38,.15));;">
                <div class="onesignal-bell-launcher-dialog-body"></div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

    @include('frontend._inc.script')

    @include('frontend._inc.sweetalert')

</body>

</html>
