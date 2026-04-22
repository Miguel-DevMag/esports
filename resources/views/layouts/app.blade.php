<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Esportes Pro - Plataforma de Esportes')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <div class="navbar-container">
                <div class="logo">
                    <h1>Futebol</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#home" class="nav-link active">Home</a></li>
                    <li><a href="#esportes" class="nav-link">Esportes</a></li>
                    <li><a href="#sobre" class="nav-link">Sobre</a></li>
                    <li><a href="#jogadores" class="nav-link">Jogadores</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <p>&copy; 2026 Esportes Pro. Todos os direitos reservados.</p>
            <ul class="social-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
