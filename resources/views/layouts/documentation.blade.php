<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TeconectAPI - Documentação')</title>

    <!-- Metadescrição para SEO -->
    <meta name="description" content="@yield('meta-description')">
    
    <link rel="stylesheet" href="{{ asset('css/documentation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1>@yield('header-title', 'TeconectAPI - Documentação')</h1>
        <button class="mode-toggle" id="modeToggle"><i class="fas fa-sun"></i></button>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a data-section="introduction">Introdução</a></li>
                <li><a data-section="getting-started">Começando</a></li>
                <li><a data-section="authentication">Autenticação</a></li>
                <li><a data-section="api-endpoints">Endpoints da API</a></li>
                <li><a data-section="examples">Exemplos</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer>
        <p>TeconectAPI &copy; 2024 - Todos os direitos reservados.</p>
    </footer>
    <script src="{{ asset('js/documentation.js') }}"></script>
</body>
</html>
