@extends('layouts.app')

@section('title', 'TeconectAPI - Conectando Soluções.')

<!-- Definindo a metadescrição específica para esta página -->
@section('meta-description')
    Descubra a TeconectAPI, a solução ideal para simplificar a autenticação e gestão de usuários em suas aplicações.
@endsection

@section('content')
<div class="main-content">
    <div class="left-section">
        <h1>Bem-vindo ao TeconectAPI</h1>
        <p>A API que simplifica a autenticação e gestão de usuários para suas aplicações.</p>
        <p>Explore a nossa documentação para aprender como integrar a TeconectAPI em seus projetos.</p>
        <div class="code-block">
            <pre>
            {
                "name": "teconectapi",
                "version": "1.0.0",
                "description": "Exemplo de configuração para a API Teconect",
                "apidoc":   { 
                    "title": "Título Personalizado para a TeconectAPI",
                    "url": "https://api.teconectapi.com/v1"
                            }
            }
            </pre>
        </div>
    </div>
    <div class="right-section">
        <div class="card">
            <h3>Documentação</h3>
            <a href="{{ route('documentation') }}">Acessar</a> <!-- Link para a página de Documentação usando o nome da rota -->
        </div>
        <div class="card">
            <h3>Comunidade</h3>
            <a href="https://chat.whatsapp.com/K6FoNPIBQNy72tktGK3BF1">Junte-se a nós</a> <!-- Link para a Comunidade via WhatsApp -->
        </div>
        <div class="card">
            <h3>Suporte</h3>
            <a href="{{ route('support') }}">Obter ajuda</a> <!-- Link para a página de Suporte usando o nome da rota -->
        </div>
    </div>
</div>
@endsection
