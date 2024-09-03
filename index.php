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
    <link rel="stylesheet" href="imgs.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GenesFlix</title>
    <style>
        body {
            background-color: #0d0d2b;
            color: white;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        
        }

        .container {
            text-align: center;
            max-width: 100%;
            margin: 0 auto;
            padding: 50px;
            box-shadow: white 0px 7px 29px 0px;
        }

        .netflix-header {
            background-color: #000000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 20px;
        }

        .netflix-logo {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bold;
            color: white;
        }

        .netflix-nav {
            display: flex;
            align-items: center;
        }

        .netflix-nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .netflix-nav a:hover {
            background-color: #333;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: #333;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .search-icon {
            color: white;
            margin-right: 5px;
        }

        .search-input {
            background-color: transparent;
            border: none;
            color: white;
            font-size: 16px;
            padding: 5px;
        }

        .search-input:focus {
            outline: none;
        }

        .netflix-buttons {
            display: flex;
            align-items: center;
        }

        .netflix-button {
            background-color: #e50914;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }

        .netflix-button:hover {
            background-color: #c20007;
        }

        .netflix-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .netflix-card {
            width: 200px;
            height: 280px;
            margin-bottom: 20px;
            position: relative;
        }

        .netflix-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .netflix-card-title {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .netflix-subtitle {
            color: white;
            font-size: 14px;
            margin-top: 10px;
        }

        .netflix-footer {
            background-color: #222;
            text-align: center;
            padding: 10px;
        }

        .netflix-footer p {
            color: #777;
            font-size: 12px;
        }

        .header-right img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
            /* Add some space between the image and the text */
        }

        .color-border img {
            border: 2px solid #ffffff;
            /* Adiciona uma borda branca */
        }

        /*---------------add matheus-------------*/

        .img-tela {
            position: absolute;
            top: 25px;
            left: 1px;
            width: 2px;
            text-align: center;
            height: 2px;
            z-index: 10;
        }


    </style>
</head>

<body>
    <header class="netflix-header">
        <div class="netflix-logo">🧬GenesFlix</div>

        

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
        <div class="netflix-buttons">
        <div class="header-right color-border">
            <img src="dna.png" alt="Perfil">
        </div>
        </div>
    </header>

    <main>
        <h2 class="netflix-subtitle">Resultados relacionados: Legendas em português</h2>
        <div class="netflix-content">
            <div class="netflix-card">
            <h2>Stranger Things</h2>
            <img src="img/stranger.jpg" class="img-tela">
                <div class="netflix-card-title">Stranger Things</div>
                
            </div>

            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/1ac1927d-40c3-43ac-a86c-235817074d59/the-crown-s5-art-en-003-4-10-2022.jpg" alt="The Crown">
                <div class="netflix-card-title">The Crown</div>
                <div class="netflix-card-title">NOVOS EPISÓDIOS</div>
                <img src="img/The Crown.jpeg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/0064a8eb-55db-4b8a-969c-7f882029748a/manhunt-unabomber-art-en-003-4-10-2022.jpg" alt="Manhunt: Unabomber">
                <div class="netflix-card-title">Manhunt: Unabomber</div>
                <img src="img/Manhunt.jpg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/f43e270f-722e-420c-93bb-71363086722b/marvel-punisher-art-en-003-4-10-2022.jpg" alt="Marvel: Justiceiro">
                <div class="netflix-card-title">Justiceiro</div>
                <img src="img/Justiceiro.jpeg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/7020f155-4f36-4a9a-94e8-b44857946626/bigmouth-s4-art-en-003-4-10-2022.jpg" alt="Big Mouth">
                <div class="netflix-card-title">Big Mouth</div>
                <img src="img/bigm.jpeg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/50dfb5c9-540f-4e99-9270-d359559d7f38/narcos-mexico-art-en-003-4-10-2022.jpg" alt="Narcos: México">
                <div class="netflix-card-title">Narcos: México</div>
                <img src="img/narr.jpeg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/96b403cf-b28e-4765-bb5b-6a0687524a91/christmas-prince-the-royal-baby-art-en-003-4-10-2022.jpg" alt="O Príncipe do Natal">
                <div class="netflix-card-title">O Príncipe do Natal</div>
                <img src="img/prin.jpeg" class="img-tela">
            </div>
            <p>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/7412278f-6213-4815-a917-385a2988ab53/dynasty-art-en-003-4-10-2022.jpg" alt="Dinasty">
                <div class="netflix-card-title">Dinasty</div>
                <img src="img/dy.jpeg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/12e43c9b-a2a5-4c74-8b6f-09a307e56009/trolls-holiday-art-en-003-4-10-2022.jpg" alt="Trolls: Holiday">
                <div class="netflix-card-title">Trolls: Holiday</div>
                <img src="img/trolls.jpg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/f8be402f-0177-4393-a9a6-c92242f8078c/orange-is-the-new-black-art-en-003-4-10-2022.jpg" alt="Orange is the New Black">
                <div class="netflix-card-title">Orange is the New Black</div>
                <img src="img/orange.webp" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/075f12e7-d589-4e50-b5c3-61a585e45763/mindhunter-art-en-003-4-10-2022.jpg" alt="Mindhunter">
                <div class="netflix-card-title">Mindhunter</div>
                <img src="img/mind.jpg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/6c44a787-015c-48dd-a501-3e6c37013345/fuller-house-art-en-003-4-10-2022.jpg" alt="Fuller House">
                <div class="netflix-card-title">Fuller House</div>
                <img src="img/fuller.webp" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/0d50a8e4-6339-42c2-834e-906a34a33a79/13-reasons-why-s4-art-en-003-4-10-2022.jpg" alt="13 Reasons Why">
                <div class="netflix-card-title">13 Reasons Why</div>
                <img src="img/reasons.jpg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/a5f738a0-761f-44ca-be29-c63538d23532/7-seeds-art-en-003-4-10-2022.jpg" alt="Sem Deus">
                <div class="netflix-card-title">Sem Deus</div>
                <img src="semdeus.webp" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/a24a0f2a-0037-4927-b322-70696d4828d7/the-ranch-art-en-003-4-10-2022.jpg" alt="The Ranch">
                <div class="netflix-card-title">The Ranch</div>
                <div class="netflix-card-title">NOVOS EPISÓDIOS</div>
                <img src="img/ranch.webp" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/c3521813-2926-4b27-a063-8410512e79d3/black-mirror-art-en-003-4-10-2022.jpg" alt="Black Mirror">
                <div class="netflix-card-title">Black Mirror</div>
                <img src="img/blackm.webp" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/894527d2-37c4-423a-bc7a-40a62780c905/dark-s3-art-en-003-4-10-2022.jpg" alt="Dark">
                <div class="netflix-card-title">Dark</div>
                <img src="img/dark.jpg" class="img-tela">
            </div>
            <div class="netflix-card">
                <img src="https://occ-0-478-1476.1.nflxso.net/dnm/api/v6/X194572707171/production/general/en/b8563c86-3614-4d4d-8878-7c786764ab8d/miraculous-tales-of-ladybug-and-cat-noir-art-en-003-4-10-2022.jpg" alt="Miraculous: Tales of Ladybug & Cat Noir">
                <div class="netflix-card-title">Miraculous: Tales of Ladybug & Cat Noir</div>
                <img src="img/miraculous.webp" class="img-tela">
            </div>
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