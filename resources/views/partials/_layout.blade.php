<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="https://sdmstaging.5bb.com.mm/images/logo.png" />
    <title>Test</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://sdmstaging.5bb.com.mm/css/bootstrap.min.css?0.0.9-2024-01-17" rel="stylesheet" />
    <link href="https://sdmstaging.5bb.com.mm/css/app.css?0.0.9-2024-01-17" rel="stylesheet" />
    <link href="https://sdmstaging.5bb.com.mm/css/tempusdominus-bootstrap-4.min.css?0.0.9-2024-01-17"
        rel="stylesheet" />
    <link href="https://sdmstaging.5bb.com.mm/css/toastr.min.css?0.0.9-2024-01-17" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Scripts -->
    <script defer src="https://sdmstaging.5bb.com.mm/js/app.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/firebase.js"></script>
    <script type="module" defer src="https://sdmstaging.5bb.com.mm/js/logs.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/popper.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/bootstrap.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/moment.min2_26_0.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/moment-with-locales.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/tempusdominus-bootstrap-4.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/all.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/jquery.validate.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/toastr.min.js?0.0.9-2024-01-17"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script defer src="https://sdmstaging.5bb.com.mm/js/sweetalert.min.js?0.0.9-2024-01-17"></script>
</head>

<body>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <div class="spanner">
        <div class="loader"></div>
    </div>
    @yield('content')
    <script src="https://kit.fontawesome.com/19d660dcf4.js" crossorigin="anonymous"></script>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKUwP05pRr3DSJpvjxppNMjigJ8F7daZo&callback=initMap&libraries=geometry,places">
    </script>
</body>

</html>
