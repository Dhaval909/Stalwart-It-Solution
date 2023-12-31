<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('admin_assets'.'/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('Admin.layout_partial.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
              @include('Admin.layout_partial.sidebar')
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                @include('Admin.layout_partial.footer')
            </div>
        </div>

</body>
</html>
