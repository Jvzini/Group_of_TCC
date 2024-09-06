<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="inicial_styles.css">
    <script src="script_inicial.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GenesFlix</title>
</head>

<body>
<div class="header">
        <div class="header-left">🧬GenesFlix</div>
        <nav class="netflix-nav">
            <a href="#">Início</a>
            <a href="#">Séries</a>
            <a href="#">Filmes</a>
            <a href="#">Originais</a>
            <a href="#">Adicionados recentemente</a>
            <a href="#">Minha lista</a>
        </nav>
        <div class="search-bar">
            <span class="search-icon">🔎</span>
            <input type="text" class="search-input" placeholder="legendas em português">
        </div>
        <div class="header-right color-border">
            <img src="img/dna.png" alt="Perfil">
        </div>
</div>
    <main>
        <div class="filme-container">
            <div class="filme" data-id="1">
                <img src="img/stranger.jpg" alt="The Shawshank Redemption">
                <h2>Stranger things</h2>
              </div>
              <div class="filme" data-id="2">
                <img src="img/godfather.jpg" alt="The Godfather">
                <h2>The Godfather</h2>
              </div>
              <div class="filme" data-id="3">
                <img src="img/thedark.jpg" alt="The Dark Knight">
                <h2>The Dark Knight</h2>
              </div>
              <div class="filme" data-id="4">
                <img src="img/angry.jpg" alt="12 Angry Men">
                <h2>12 Angry Men</h2>
              </div>
              <div class="filme" data-id="5">
                <img src="img/origem.jpg" alt="12 Angry Men">  
                <h2>12 A origem</h2>
              </div>
              <div class="filme" data-id="6">
                <img src="img/Tempo de violencia.jpg" alt="12 Angry Men">
                <h2>Pulp Fiction: Tempo de Violência</h2>
              </div>
              <div class="filme" data-id="7">
                <img src="img/clube de luta.jpg" alt="12 Angry Men">
                <h2>Clube da Luta</h2>
              </div>
              <div class="filme" data-id="8">
                <img src="img/contado de histias.jpg" alt="12 Angry Men">
                <h2>Forrest Gump: O Contador de Histórias</h2>
              </div>
              <div class="filme" data-id="9">
                <img src="img/matrix.jpg" alt="12 Angry Men">
                <h2>Matrix</h2>
              </div>
              <div class="filme" data-id="10">
                <img src="img/aneis.jpg" alt="12 Angry Men">
                <h2>O Senhor dos Anéis: O Retorno do Rei</h2>
              </div>
              <div class="filme" data-id="11">
                <img src="img/gladiador.jpg" alt="12 Angry Men">
                <h2>Gladiador</h2>
              </div>
              <div class="filme" data-id="12">
                <img src="img/silencio.jpg" alt="12 Angry Men">
                <h2>O Silêncio dos Inocentes</h2>
              </div>
              <div class="filme" data-id="13">
                <img src="img/seven.jpg" alt="12 Angry Men">
                <h2>Se7en: Os Sete Crimes Capitais</h2>
              </div>
              <div class="filme" data-id="14">
                <img src="img/sus.jpg" alt="12 Angry Men">
                <h2>Os Suspeitos</h2>
              </div>
              <div class="filme" data-id="15">
                <img src="img/bons conpanheiros.jpg" alt="12 Angry Men">
                <h2>'Os Bons Companheiros</h2>
              </div>
              <div class="filme" data-id="16">
                <img src="img/infiltrados.webp" alt="12 Angry Men">
                <h2>Os Infiltrados</h2>
              </div>
              <div class="filme" data-id="17">
                <img src="img/regresso.webp" alt="12 Angry Men">
                <h2>O Regresso</h2>
              </div>
              <div class="filme" data-id="18">
                <img src="img/inter.webp" alt="12 Angry Men">
                <h2>Interestelar</h2>
              </div>
              <div class="filme" data-id="19">
                <img src="img/dinossauro.webp" alt="12 Angry Men">
                <h2>Jurassic Park: Parque dos Dinossauros</h2>
              </div>
              <div class="filme" data-id="20">
                <img src="img/titanic.webp" alt="12 Angry Men">
                <h2>Titanic'</h2>
              </div>
              <div class="filme" data-id="21">
                <img src="img/ilum.jpg" alt="12 Angry Men">
                <h2>O Iluminado</h2>
              </div>
              <div class="filme" data-id="22">
                <img src="img/old.webp" alt="12 Angry Men">
                <h2>Oldboy</h2>
              </div>
              <div class="filme" data-id="23">
                <img src="img/parasita.jpg" alt="12 Angry Men">
                <h2>Parasita</h2>
              </div>
              <div class="filme" data-id="24">
                <img src="img/deus.jpg" alt="12 Angry Men">
                <h2>Cidade de Deus</h2>
              </div>
              <div class="filme" data-id="25">
                <img src="img/viagem.webp" alt="12 Angry Men">
                <h2>A Viagem de Chihiro</h2>
              </div>
              <div class="filme" data-id="26">
                <img src="img/robo.webp" alt="12 Angry Men">
                <h2>WALL-E: O Robô</h2>
              </div>
              <div class="filme" data-id="27">
                <img src="img/avatar.jpg" alt="12 Angry Men">
                <h2>Avatar</h2>
              </div>
              <div class="filme" data-id="28">
                <img src="img/hotel.webp" alt="12 Angry Men">
                <h2>O Grande Hotel Budapeste</h2>
              </div>
              <div class="filme" data-id="29">
                <img src="img/leao.webp" alt="12 Angry Men">
                <h2>O Rei Leão</h2>
              </div>
              <div class="filme" data-id="30">
                <img src="img/memento.jpg" alt="12 Angry Men">
                <h2>Memento</h2>
              </div>
        
          <div class="filme-detalhes" id="filme-detalhes">
            <h2 id="filme-titulo"></h2>
            <p id="filme-data-lancamento"></p>
            <p id="filme-duracao"></p>
            <p id="filme-sinopse"></p>
            <p id="filme-descricao"></p>
            <p id="filme-critica"></p>
          </div>
    </main>
    
    <div class="container">
        <h1>LOGOUT</h1>
        <a href="logout.php" class="btn btn-warning">🏃🏻‍♂️‍➡️SAIR</a>
    </div>

</html>
<footer class="netflix-footer">
    <p>&copy; 2024 GenesFlix, Inc.</p>
</footer>
</body>

</html>