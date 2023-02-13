<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')  }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <style>
        #myTable_filter {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">

        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>

                @yield('content')

            </main>

            @include('layouts.inc.admin-footer')

        </div>
    </div>

    {{-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>