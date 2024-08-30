<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> User Portal </title>
    @vite('resources/js/spa/user/app.js')
    @vite('resources/scss/stylesheet.scss')
</head>
<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="user-portal" id="app"></div>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('app').classList.remove('d-none');
            }, 3000);
        });

    </script>

</body>
@include('spa.component.script')
</html>
