<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TeconectAPI - Conectando Soluções.')</title>

    <!-- Metadescrição para SEO -->
    <meta name="description" content="@yield('meta-description')">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
