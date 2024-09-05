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
    <link rel="stylesheet" href="card.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GenesFlix</title>
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
        <div class="filme-container">
            <div class="filme" data-id="1">
                <img src="img/stranger.jpg" alt="The Shawshank Redemption">
                <h2>Stranger things</h2>
              </div>
              <div class="filme" data-id="2">
                <img src="O Padrinho.jfif" alt="The Godfather">
                <h2>The Godfather</h2>
              </div>
              <div class="filme" data-id="3">
                <img src="batman.jfif" alt="The Dark Knight">
                <h2>The Dark Knight</h2>
              </div>
              <div class="filme" data-id="4">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>12 Angry Men</h2>
              </div>
              <div class="filme" data-id="5">
                <img src="A origem.jfif" alt="12 Angry Men">  
                <h2>12 A origem</h2>
              </div>
              <div class="filme" data-id="6">
                <img src="Tempo de violencia.jpg" alt="12 Angry Men">
                <h2>Pulp Fiction: Tempo de Violência</h2>
              </div>
              <div class="filme" data-id="7">
                <img src="clube de luta.jpg" alt="12 Angry Men">
                <h2>Clube da Luta</h2>
              </div>
              <div class="filme" data-id="8">
                <img src="contado de histias.jpg" alt="12 Angry Men">
                <h2>Forrest Gump: O Contador de Histórias</h2>
              </div>
              <div class="filme" data-id="9">
                <img src="matrix.jpg" alt="12 Angry Men">
                <h2>Matrix</h2>
              </div>
              <div class="filme" data-id="10">
                <img src="senhor dos aneis.jpg" alt="12 Angry Men">
                <h2>O Senhor dos Anéis: O Retorno do Rei</h2>
              </div>
              <div class="filme" data-id="11">
                <img src="gladiador.jpg" alt="12 Angry Men">
                <h2>Gladiador</h2>
              </div>
              <div class="filme" data-id="12">
                <img src="silencio.webp" alt="12 Angry Men">
                <h2>O Silêncio dos Inocentes</h2>
              </div>
              <div class="filme" data-id="13">
                <img src="seven.jpg" alt="12 Angry Men">
                <h2>Se7en: Os Sete Crimes Capitais</h2>
              </div>
              <div class="filme" data-id="14">
                <img src="os suspeitos.jfif" alt="12 Angry Men">
                <h2>Os Suspeitos</h2>
              </div>
              <div class="filme" data-id="15">
                <img src="bons conpanheiros.jpg" alt="12 Angry Men">
                <h2>'Os Bons Companheiros</h2>
              </div>
              <div class="filme" data-id="16">
                <img src="os infiltrados.jfif" alt="12 Angry Men">
                <h2>Os Infiltrados</h2>
              </div>
              <div class="filme" data-id="17">
                <img src="o regresso.avif" alt="12 Angry Men">
                <h2>O Regresso</h2>
              </div>
              <div class="filme" data-id="18">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Interestelar</h2>
              </div>
              <div class="filme" data-id="19">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Jurassic Park: Parque dos Dinossauros</h2>
              </div>
              <div class="filme" data-id="20">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Titanic'</h2>
              </div>
              <div class="filme" data-id="21">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>O Iluminado</h2>
              </div>
              <div class="filme" data-id="22">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Oldboy</h2>
              </div>
              <div class="filme" data-id="23">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Parasita</h2>
              </div>
              <div class="filme" data-id="24">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Cidade de Deus</h2>
              </div>
              <div class="filme" data-id="25">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>A Viagem de Chihiro</h2>
              </div>
              <div class="filme" data-id="26">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>WALL-E: O Robô</h2>
              </div>
              <div class="filme" data-id="27">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>Avatar</h2>
              </div>
              <div class="filme" data-id="28">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>O Grande Hotel Budapeste</h2>
              </div>
              <div class="filme" data-id="29">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
                <h2>O Rei Leão</h2>
              </div>
              <div class="filme" data-id="30">
                <img src="12 Angry Men.jfif" alt="12 Angry Men">
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
        
          <script>
           const filmes = [
          {
            id: 1,
            titulo: 'Um Sonho de Liberdade',
            dataLancamento: '23 de setembro de 1994',
            duracao: '2h 22m',
            sinopse: 'Dois homens presos se tornam amigos e encontram redenção através de atos de decência comum.',
            descricao: 'Drama',
            critica: '91%'
          },
          {
            id: 2,
            titulo: 'O Poderoso Chefão',
            dataLancamento: '15 de março de 1972',
            duracao: '3h 27m',
            sinopse: 'O patriarca de uma família criminosa transfere o controle de seu império para seu filho relutante.',
            descricao: 'Crime, Drama',
            critica: '97%'
          },
          {
            id: 3,
            titulo: 'O Cavaleiro das Trevas',
            dataLancamento: '18 de julho de 2008',
            duracao: '2h 32m',
            sinopse: 'Quando o Coringa causa caos em Gotham City, Batman deve usar todas as suas habilidades para pará-lo e salvar a cidade.',
            descricao: 'Ação, Thriller',
            critica: '94%'
          },
          {
            id: 4,
            titulo: '12 Homens e uma Sentença',
            dataLancamento: '13 de abril de 1957',
            duracao: '1h 36m',
            sinopse: 'Um júri de 12 homens deve decidir o destino de um jovem acusado de assassinato, com um único voto discordante.',
            descricao: 'Drama',
            critica: '93%'
          },
          {
            id: 5,
            titulo: 'A Origem',
            dataLancamento: '16 de julho de 2010',
            duracao: '2h 28m',
            sinopse: 'Um ladrão especializado em extrair segredos do subconsciente durante o sonho recebe a tarefa de implantar uma ideia em vez de roubá-la.',
            descricao: 'Ação, Aventura, Sci-Fi',
            critica: '86%'
          },
          {
            id: 6,
            titulo: 'Pulp Fiction: Tempo de Violência',
            dataLancamento: '14 de outubro de 1994',
            duracao: '2h 34m',
            sinopse: 'A trama entrelaça várias histórias de crime em Los Angeles e é conhecida por seu diálogo não linear.',
            descricao: 'Crime, Drama',
            critica: '92%'
          },
          {
            id: 7,
            titulo: 'Clube da Luta',
            dataLancamento: '15 de outubro de 1999',
            duracao: '2h 19m',
            sinopse: 'Um homem insatisfeito com sua vida se une a um fabricante de sabonetes para formar um clube de luta secreto.',
            descricao: 'Drama',
            critica: '79%'
          },
          {
            id: 8,
            titulo: 'Forrest Gump: O Contador de Histórias',
            dataLancamento: '6 de julho de 1994',
            duracao: '2h 22m',
            sinopse: 'A vida de um homem simples, mas extraordinário, é contada através de vários eventos históricos.',
            descricao: 'Drama, Romance',
            critica: '71%'
          },
          {
            id: 9,
            titulo: 'Matrix',
            dataLancamento: '31 de março de 1999',
            duracao: '2h 16m',
            sinopse: 'Um hacker descobre a verdade sobre sua realidade e se junta a um grupo de rebeldes para lutar contra uma inteligência artificial.',
            descricao: 'Ação, Sci-Fi',
            critica: '87%'
          },
          {
            id: 10,
            titulo: 'O Senhor dos Anéis: O Retorno do Rei',
            dataLancamento: '17 de dezembro de 2003',
            duracao: '3h 21m',
            sinopse: 'A batalha final pela Terra Média se aproxima, e a jornada dos hobbits está prestes a chegar ao clímax.',
            descricao: 'Aventura, Drama, Fantasia',
            critica: '93%'
          },
          {
            id: 11,
            titulo: 'Gladiador',
            dataLancamento: '5 de maio de 2000',
            duracao: '2h 35m',
            sinopse: 'Um general romano é traído e se torna um gladiador para buscar vingança.',
            descricao: 'Ação, Aventura, Drama',
            critica: '77%'
          },
          {
            id: 12,
            titulo: 'O Silêncio dos Inocentes',
            dataLancamento: '14 de fevereiro de 1991',
            duracao: '1h 58m',
            sinopse: 'Uma jovem agente do FBI busca a ajuda de um canibal encarcerado para capturar outro assassino.',
            descricao: 'Crime, Drama, Thriller',
            critica: '95%'
          },
          {
            id: 13,
            titulo: 'Se7en: Os Sete Crimes Capitais',
            dataLancamento: '22 de setembro de 1995',
            duracao: '2h 7m',
            sinopse: 'Dois detetives caçam um serial killer que comete crimes baseados nos sete pecados capitais.',
            descricao: 'Crime, Drama, Thriller',
            critica: '85%'
          },
          {
            id: 14,
            titulo: 'Os Suspeitos',
            dataLancamento: '16 de agosto de 1995',
            duracao: '1h 46m',
            sinopse: 'Cinco criminosos são reunidos para um golpe, mas descobrem que foram manipulados por um misterioso personagem.',
            descricao: 'Crime, Drama, Thriller',
            critica: '89%'
          },
          {
            id: 15,
            titulo: 'Os Bons Companheiros',
            dataLancamento: '19 de setembro de 1990',
            duracao: '2h 26m',
            sinopse: 'A história de um jovem que se junta à máfia e vê sua vida desmoronar.',
            descricao: 'Crime, Drama',
            critica: '96%'
          },
          {
            id: 16,
            titulo: 'Os Infiltrados',
            dataLancamento: '6 de outubro de 2006',
            duracao: '2h 31m',
            sinopse: 'Policiais e criminosos se infiltram nos mundos uns dos outros em uma tensa troca de identidade.',
            descricao: 'Crime, Drama, Thriller',
            critica: '91%'
          },
          {
            id: 17,
            titulo: 'O Regresso',
            dataLancamento: '25 de dezembro de 2015',
            duracao: '2h 36m',
            sinopse: 'Um caçador é deixado para morrer no deserto depois de ser atacado por um urso e busca vingança.',
            descricao: 'Ação, Aventura, Drama',
            critica: '82%'
          },
          {
            id: 18,
            titulo: 'Interestelar',
            dataLancamento: '7 de novembro de 2014',
            duracao: '2h 49m',
            sinopse: 'Astronautas viajam através de um buraco de minhoca em busca de uma nova casa para a humanidade.',
            descricao: 'Aventura, Drama, Sci-Fi',
            critica: '72%'
          },
          {
            id: 19,
            titulo: 'Jurassic Park: Parque dos Dinossauros',
            dataLancamento: '11 de junho de 1993',
            duracao: '2h 7m',
            sinopse: 'Cientistas clonam dinossauros para criar um parque temático, mas as coisas rapidamente saem do controle.',
            descricao: 'Ação, Aventura, Sci-Fi',
            critica: '85%'
          },
          {
            id: 20,
            titulo: 'Titanic',
            dataLancamento: '19 de dezembro de 1997',
            duracao: '3h 14m',
            sinopse: 'A história de um romance a bordo do infame navio Titanic.',
            descricao: 'Drama, Romance',
            critica: '89%'
          },
          {
            id: 21,
            titulo: 'O Iluminado',
            dataLancamento: '23 de maio de 1980',
            duracao: '2h 26m',
            sinopse: 'Um escritor e sua família se mudam para um hotel isolado, onde eventos sobrenaturais começam a acontecer.',
            descricao: 'Horror, Thriller',
            critica: '84%'
          },
          {
            id: 22,
            titulo: 'Oldboy',
            dataLancamento: '21 de novembro de 2003',
            duracao: '2h',
            sinopse: 'Um homem é sequestrado e mantido em cativeiro por 15 anos, depois é libertado e busca vingança.',
            descricao: 'Ação, Drama, Mistério',
            critica: '80%'
          },
          {
            id: 23,
            titulo: 'Parasita',
            dataLancamento: '30 de maio de 2019',
            duracao: '2h 12m',
            sinopse: 'Uma família pobre se infiltra na vida de uma família rica e as consequências são desastrosas.',
            descricao: 'Comédia, Drama, Thriller',
            critica: '96%'
          },
          {
            id: 24,
            titulo: 'Cidade de Deus',
            dataLancamento: '30 de janeiro de 2003',
            duracao: '2h 10m',
            sinopse: 'A história da vida no Rio de Janeiro através dos olhos de dois meninos que crescem na favela.',
            descricao: 'Crime, Drama',
            critica: '91%'
          },
          {
            id: 25,
            titulo: 'A Viagem de Chihiro',
            dataLancamento: '20 de julho de 2001',
            duracao: '2h 5m',
            sinopse: 'Uma menina entra em um mundo mágico e deve encontrar uma maneira de salvar seus pais e voltar para casa.',
            descricao: 'Animação, Aventura, Fantasia',
            critica: '97%'
          },
          {
            id: 26,
            titulo: 'WALL-E: O Robô',
            dataLancamento: '27 de junho de 2008',
            duracao: '1h 38m',
            sinopse: 'Um robô de limpeza solitário em um futuro pós-apocalíptico embarca em uma jornada espacial.',
            descricao: 'Animação, Aventura, Drama',
            critica: '95%'
          },
          {
            id: 27,
            titulo: 'Avatar',
            dataLancamento: '18 de dezembro de 2009',
            duracao: '2h 42m',
            sinopse: 'Um ex-fuzileiro naval é enviado para o planeta Pandora, onde ele se envolve com a cultura nativa.',
            descricao: 'Ação, Aventura, Sci-Fi',
            critica: '82%'
          },
          {
            id: 28,
            titulo: 'O Grande Hotel Budapeste',
            dataLancamento: '28 de março de 2014',
            duracao: '1h 39m',
            sinopse: 'As aventuras do concierge de um famoso hotel europeu e seu protegido.',
            descricao: 'Aventura, Comédia, Crime',
            critica: '91%'
          },
          {
            id: 29,
            titulo: 'O Rei Leão',
            dataLancamento: '24 de junho de 1994',
            duracao: '1h 28m',
            sinopse: 'Um jovem leão deve assumir seu lugar como rei depois da morte de seu pai.',
            descricao: 'Animação, Aventura, Drama',
            critica: '93%'
          },
          {
            id: 30,
            titulo: 'Memento',
            dataLancamento: '16 de março de 2001',
            duracao: '1h 53m',
            sinopse: 'Um homem com perda de memória de curto prazo tenta encontrar o assassino de sua esposa.',
            descricao: 'Mistério, Suspense',
            critica: '92%'
          }
        ];
        
        
        // Atualize o código do evento de clique para manipular todos os filmes adicionados
        const filmeContainer = document.querySelector('.filme-container');
        const filmeDetalhes = document.querySelector('.filme-detalhes');
        
        filmeContainer.addEventListener('click', (e) => {
          const filmeElement = e.target.closest('.filme');
          if (filmeElement) {
            const filmeId = filmeElement.dataset.id;
            const filme = filmes.find((filme) => filme.id === parseInt(filmeId));
            if (filme) {
              filmeDetalhes.style.display = 'block';
              document.querySelector('#filme-titulo').textContent = filme.titulo;
              document.querySelector('#filme-data-lancamento').textContent = filme.dataLancamento;
              document.querySelector('#filme-duracao').textContent = filme.duracao;
              document.querySelector('#filme-sinopse').textContent = filme.sinopse;
              document.querySelector('#filme-descricao').textContent = filme.descricao;
              document.querySelector('#filme-critica').textContent = filme.critica;
            }
          }
        });
        
        document.querySelector('.filme-detalhes').addEventListener('click', () => {
          filmeDetalhes.style.display = 'none';
        });
          </script>
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