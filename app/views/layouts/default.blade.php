<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>{{ $_ENV['SITE_NAME'] }}</title>
<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        @include('partials.nav.main')
        @yield('header')
        <hr>
        @yield('content')
    </div>
</body>
</html>
