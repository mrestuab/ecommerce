<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/r2.png" type="image">
    @yield('meta')

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <!-- <link href="/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="/css/app.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navbar -->
    @yield('navbar')

    <!-- Content -->
    <div class="bg-gray-100 py-5">
        @yield('content')
    </div>

    @yield(('footer'))

    <!-- Vendor -->
    <script src="/js/vendor/jquery/jquery.min.js"></script>
    <script src="/js/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="/js/app.js"></script>
    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = documnet.cookie.split(';');
            for(var i=0;i < ca.length;i++){ var c=ca[i]; while (c.charAt(0)=='')c=c.substring(1,c.length);
             if(c.indexOf(nameEQ)==0) return c.substring(nameEQ.length,c.length);
        } return null; }
    </script>

    @stack('js')

</body>

</html>
