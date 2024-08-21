<header>
    <img src="{{ asset('img/logo.png') }}" alt="TeconectAPI Logo">
    <nav>
        <div class="hamburger"><i class="fas fa-bars"></i></div>
        <div class="menu">
            <ul>
                <!-- Link para a página de Documentação usando o nome da rota -->
                <li><a href="{{ route('documentation') }}">Documentação</a></li>

                <!-- Link para a página da Comunidade (via WhatsApp) -->
                <li><a href="https://chat.whatsapp.com/K6FoNPIBQNy72tktGK3BF1">Comunidade</a></li>

                <!-- Link para a página de Suporte usando o nome da rota -->
                <li><a href="{{ route('support') }}">Suporte</a></li>
            </ul>
        </div>
        <div class="menu-mobile">
            <ul>
                <!-- Link para a página de Documentação no menu mobile usando o nome da rota -->
                <li><a href="{{ route('documentation') }}">Documentação</a></li>

                <!-- Link para a página da Comunidade (via WhatsApp) no menu mobile -->
                <li><a href="https://chat.whatsapp.com/K6FoNPIBQNy72tktGK3BF1">Comunidade</a></li>

                <!-- Link para a página de Suporte no menu mobile usando o nome da rota -->
                <li><a href="{{ route('support') }}">Suporte</a></li>
            </ul>
        </div>
    </nav>
</header>
