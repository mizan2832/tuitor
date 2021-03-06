<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="/backend/main.css" rel="stylesheet">
 @stack('js_css')
</head>
<body>


    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.include.header')       
 <-- ui setting -->    
         <div class="app-main">
                @include('backend.include.sidebar')  
                 <div class="app-main__outer">
                    @yield('content')
                    
                  </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="/backend/assets/scripts/main.js"></script></body>
@stack('script')
</html>
