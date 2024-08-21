@extends('layouts.documentation')

@section('title', 'TeconectAPI - Documentação')

<!-- Definindo a metadescrição específica para a página de documentação -->
@section('meta-description')
    Explore a documentação completa da TeconectAPI. Saiba como integrar, autenticar e utilizar todos os endpoints disponíveis para melhorar a gestão de usuários nas suas aplicações.
@endsection

@section('header-title', 'TeconectAPI - Documentação')

@section('content')
    <section id="introduction" class="active">
        <h2>Introdução</h2>
        <p>Bem-vindo à documentação da TeconectAPI. Aqui você encontrará todas as informações necessárias para integrar e utilizar nossa API em seus projetos.</p>
    </section>

    <section id="getting-started">
        <h2>Começando</h2>
        <p>Para começar a utilizar a TeconectAPI, você precisa se autenticar e obter um token de acesso. Abaixo está um exemplo de como realizar esta operação.</p>
        <pre><code>
curl -X POST https://api.teconectapi.com/v1/authenticate \
-H 'Content-Type: application/json' \
-d '{
    "email": "seu_email@example.com",
    "password": "sua_senha"
}'
        </code></pre>
    </section>

    <section id="authentication">
        <h2>Autenticação</h2>
        <p>A autenticação é realizada enviando as credenciais de e-mail e senha. Caso a autenticação seja bem-sucedida, você receberá um token de acesso que deve ser utilizado em todas as requisições subsequentes.</p>
    </section>

    <section id="api-endpoints">
        <h2>Endpoints da API</h2>
        <p>Abaixo estão listados alguns dos principais endpoints disponíveis na TeconectAPI:</p>
        <ul>
            <li><strong>GET /users</strong> - Retorna uma lista de usuários.</li>
            <li><strong>POST /users</strong> - Cria um novo usuário.</li>
            <li><strong>GET /users/{id}</strong> - Retorna os detalhes de um usuário específico.</li>
            <li><strong>PUT /users/{id}</strong> - Atualiza as informações de um usuário específico.</li>
            <li><strong>DELETE /users/{id}</strong> - Deleta um usuário específico.</li>
        </ul>
    </section>

    <section id="examples">
        <h2>Exemplos</h2>
        <p>Abaixo segue um exemplo de como listar todos os usuários registrados na API:</p>
        <pre><code>
curl -X GET https://api.teconectapi.com/v1/users \
-H 'Authorization: Bearer SEU_TOKEN_AQUI'
        </code></pre>
    </section>
@endsection
