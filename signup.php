<?php
include 'Conexao.php';
?>

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
    <form action="" method="post">
    <div class="container">
      <div class="card">
        <h1>Cadastrar Filmes</h1>

        <div id="msgError"></div> 
        <div id="msgSuccess"></div>
        <div class="label-float">
          <input type="text" name="labelcod"/>
          <label  for="labelNome">cod</label>
        </div>
        <div class="label-float">
          <input type="text" name="labelNome"/>
          <label  for="labelNome">Nome Do Filme</label>
        </div>

        <div class="label-float">
          <input type="text" name="labelData_lanc"/>
          <label  for="data_lanc">Data De Lançamento</label>
        </div>

        <div class="label-float">
          <input type="text" name="labelsinopse" />
          <label  for="sinopse">Sinopse</label>
          
        </div>

        

        <div class="justify-center">
          <button type="submit" name="enviar" > Cadastrar</button>
        </div>
      </div>
    </div>
    </form>
    
  </body>
</html>

<?php
if (isset($_POST['enviar'])):
  $cod= $_POST['labelcod'];
$Nome_De_Filme = $_POST['labelNome'];
$Data_De_Lancamento = $_POST['labelData_lanc'];
$Sinopse = $_POST['labelsinopse'];
$sql=mysqli_query($conexao, "INSERT INTO Filmes(cod,Nome_do_Filme, Data_de_Lancamento, Sinopse) VALUES('$cod','$Nome_De_Filme', '$Data_De_Lancamento','$Sinopse')");
endif;
?>