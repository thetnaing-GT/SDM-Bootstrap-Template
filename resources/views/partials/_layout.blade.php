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
</head>

<body style="background: #e3e3e3">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <div class="spanner">
        <div class="loader"></div>
    </div>
    <div class="sdm">
        @include('partials._sidebar')
        <main class="sdm__main">
            <div class="sdm__page-wrapper">
                <div class="sdm__header-wrapper">
                    @include('partials._header')
                </div>
                <div class="sdm__page-content-wrapper">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/19d660dcf4.js" crossorigin="anonymous"></script>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKUwP05pRr3DSJpvjxppNMjigJ8F7daZo&callback=initMap&libraries=geometry,places">
    </script>
</body>

</html>
