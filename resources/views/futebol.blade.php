@extends('layouts.app')

@section('title', 'Esportes Pro - Futebol')

@section('content')

    
    <section class="hero-home" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Futebol</h1>
                <p class="hero-subtitle">O esporte mais apaixonante do mundo</p>
                <p class="hero-description">Estratégia, velocidade e emoção em cada partida</p>
                <div class="hero-buttons">
                    <a href="/" class="hero-button">← Voltar</a>
                    <a href="#esportes" class="hero-button">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO ESPORTES - CARDS SEM IMAGENS -->
    <section class="sports-section" id="esportes">
        <div class="sports-container">
            <h2>Nossos Esportes</h2>
            <p class="section-subtitle">Escolha seu esporte favorito</p>
            
            <div class="sports-grid">
                <!-- Card Futebol -->
                <article class="sport-card">
                    <div class="card-header">
                        <h3>Futebol</h3>
                    </div>
                    <div class="card-content">
                        <p>O desporto mais apaixonante do mundo. Estratégia, velocidade e emoção em cada partida.</p>
                        <a href="/futebol" class="card-button">Acessar</a>
                    </div>
                </article>

                <!-- Card Basquete -->
                <article class="sport-card">
                    <div class="card-header">
                        <h3>Basquete</h3>
                    </div>
                    <div class="card-content">
                        <p>Movimento rápido e preciso. Acompanhe os melhores times e jogadores do basquete.</p>
                        <a href="#basquete" class="card-button">Acessar</a>
                    </div>
                </article>

                <!-- Card Vôlei -->
                <article class="sport-card">
                    <div class="card-header">
                        <h3>Vôlei</h3>
                    </div>
                    <div class="card-content">
                        <p>Sincronização e trabalho em equipe. Descubra a dinâmica do esporte mais elegante.</p>
                        <a href="#volei" class="card-button">Acessar</a>
                    </div>
                </article>

                <!-- Card Ping Pong -->
                <article class="sport-card">
                    <div class="card-header">
                        <h3>Ping Pong</h3>
                    </div>
                    <div class="card-content">
                        <p>Reflexos aguçados e precisão. O esporte que testa seus limites físicos e mentais.</p>
                        <a href="#pingpong" class="card-button">Acessar</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SEÇÃO SOBRE -->
    <section class="about-section" id="sobre">
        <div class="about-container">
            <h2>Sobre Esportes Pro</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Sua Plataforma de Esportes</h3>
                    <p>
                        Esportes Pro é uma plataforma dedicada a trazer o melhor do mundo dos esportes profissionais. 
                        Com conteúdo atualizado, análises detalhadas e uma comunidade apaixonada, oferecemos tudo que 
                        você precisa para acompanhar seus esportes favoritos.
                    </p>
                    <p>
                        Desde futebol até ping pong, exploramos cada modalidade com profundidade e paixão, trazendo 
                        insights únicos e cobertura completa dos maiores eventos do mundo.
                    </p>
                </div>
                <div class="about-stats">
                    <div class="stat">
                        <span class="stat-number">4</span>
                        <span class="stat-name">Esportes</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">1000+</span>
                        <span class="stat-name">Atletas</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">50+</span>
                        <span class="stat-name">Competições</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">∞</span>
                        <span class="stat-name">Paixão</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO JOGADORES -->
    <section class="players-section" id="jogadores">
        <div class="players-container">
            <h2>Grandes Jogadores</h2>
            <p class="section-subtitle">Conheça os ídolos dos esportes</p>
            
            <div class="players-grid">
                <article class="player-card">
                    <h3>Jogador Lendário</h3>
                    <p class="player-sport">Futebol</p>
                    <p class="player-bio">Campeão mundial, ídolo de gerações.</p>
                </article>

                <article class="player-card">
                    <h3>Astro do Basquete</h3>
                    <p class="player-sport">Basquete</p>
                    <p class="player-bio">Recordista em pontuação e títulos.</p>
                </article>

                <article class="player-card">
                    <h3>Rainha do Vôlei</h3>
                    <p class="player-sport">Vôlei</p>
                    <p class="player-bio">Melhor levantadora do mundo.</p>
                </article>

                <article class="player-card">
                    <h3>Mestre do Ping Pong</h3>
                    <p class="player-sport">Ping Pong</p>
                    <p class="player-bio">Campeão olímpico por 3 vezes.</p>
                </article>
            </div>
        </div>
    </section>
@endsection
