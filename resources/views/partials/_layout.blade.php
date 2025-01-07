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
