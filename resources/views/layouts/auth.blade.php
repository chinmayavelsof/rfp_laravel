<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Auth')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="{{ route('login') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    
    @yield('content')

    {{-- Common JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    {{-- Page-specific scripts --}}
    @yield('scripts')
</body>
</html>