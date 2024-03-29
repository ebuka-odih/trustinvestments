
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://unitrustinvest.com/LIVECHAT.js" async></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Trust Investment Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ALT STYLE DOMAIN -->
    <link href="{{ asset('user/css/altcss.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('user/js/bootstrap.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}" rel="stylesheet"></script>
    <!-- END ALT STYLE DOMAIN -->

    <script>
        document.onkeydown = function(e) {
            if(event.keyCode == 123){
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
                return false;
            }
        }
    </script>
    <style>
        .alt_sidenav {
            background-color: #0e0e0e !important;
            min-height: 700px;
            padding-top: 50px;
        }
        .alt_dlinks {
            display: block;
            padding: 20px 0;
            color: #ffd700;
        }
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif;" oncontextmenu="return fals">
<nav class="py-4" style="background-color: #020202;">
    <a class="alt_logolink" href="{{ route('homepage') }}">
        <img src="{{ asset('logo-dark.png') }}" style="padding-left: 10px; margin-right: 5px; height: 30px;">
        <b style="color: white; font-size: 15px; padding-left: 10px">Trust Invest</b></a>
    <!-- LOG OUT -->
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: white; background-color: #121212; font-size: 14px; font-weight: bold; float: right; margin-right: 20px; padding: 5px 10px; border-radius: 5px; border: 2px solid #fff;">Sign Out</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!--//  -->
    <div style="float: right; padding: 5px 10px;"><h6 style="display: inline; color: #fff; font-size: 15px;">{{ auth()->user()->name }}</h6></div>
</nav>
<!-- MODAL FOR ACCOUNT VERIFICATION -->



<!-- ///// -->

<section class="container-fluid userdashboard">
    <div class="row">
        <!-- ~SIDENAV -->
        @include('dashboard.layout.sidebar')


        @yield('content')

</section>

<footer style="background-color: #050505; color: #ffffff;" class="py-4 text-center">
    <small class="block">&copy; 2013 - 2022 | Trust Investment All Rights Reserved.</small>
</footer>
<script src="{{ asset('LIVECHAT.js') }}" async></script>
{{--<script src="//code.tidio.co/my8cd4zmzw6raeokztfdbxm9e8vtewlu.js" async></script>--}}
