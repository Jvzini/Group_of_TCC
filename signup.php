<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="signup.css" />
    <title>Singup</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Cadastrar Filmes</h1>

        <div id="msgError"></div> 
        <div id="msgSuccess"></div>

        <div class="label-float">
          <input type="text" id="nome_filme" placeholder=" " required />
          <label name="labelNome" for="nome">Nome Do Filme</label>
        </div>

        <div class="label-float">
          <input type="text" id="data_lanc" placeholder=" " required />
          <label name="labelData_lanc" for="data_lanc">Data De Lançamento</label>
        </div>

        <div class="label-float">
          <input type="text" id="sinopse" placeholder=" " required />
          <label name="labelsinopse" for="sinopse">Sinopse</label>
          
        </div>

        

        <div class="justify-center">
          <button type="submit" name="" > Cadastrar</button>
        </div>
      </div>
    </div>

    
  </body>
</html>

<?php
if (isset($_POST['enviar'])):
$Nome_De_Filme = $_POST['labelNome'];
$Data_De_Lancamento = $_POST['labelData_lanc'];
$Sinopse = $_POST['labelsinopse'];
$sql=mysqli_query($conexao, "INSERT INTO Filmes(Nome_De_Filme, Data_De_Lancamento, Sinopse) VALUES('$Nome_De_Filme', '$Data_De_Lancamento','$Sinopse')");
endif;
?>