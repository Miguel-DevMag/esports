<!DOCTYPE html>
<html>
<head>
    <title>Exemplo JS com Vite</title>
    @vite('resources/css/style.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div id="home" class="container">
   <div class="hero">
    <header class="navbar">
        <img src="#" alt="logo">
        <div>
                <a href="#home">Home</a>
                <a href="#esportes">Esportes</a>
                <a href="#sobre">Sobre</a>
                <a href="#jogadores">Jogadores</a>
            
        </div> 
    </header>
   </div>
   <main>
    <section id="esportes" class="cards-sports">
        <div>
            <img src="#" alt="basquete">
            <p></p>
            <button>Acessar</button>
        </div>
        <div>
            <img src="#" alt="Volei">
            <p></p>
            <button>Acessar</button>
        </div>
        <div>
            <img src="#" alt="Ping Pong">
            <p></p>
            <button>Acessar</button>
        </div>
    </section>
    <section id="sobre" class="about">
        <h2>Sobre o Esporte</h2>
        <div>
             <video src=""></video>
             <p></p>
        </div>
    </section>
   </main>

   <footer>
       <p>&copy; 2026 Esportes. Todos os direitos reservados.</p>
   </footer>
   </div>
</body>
</html>