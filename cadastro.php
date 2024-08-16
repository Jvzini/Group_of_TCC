<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texte</title>
</head>
<body>

<form method="post" action="">
<label>Nome de Usuario: </label>
<input name="nome" size = "30" type="text">
<br>
<label>Email</label>
<input name="email" size = "100" type="text">
<br>
<label>Senha</label>
<input name="senha" size = "50" type="text">
<br>
<button type="submit" name="enviar"> Cadastrar</button>
</form>

</body>
</html>

<?php
if (isset($_POST['enviar'])):
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql=mysqli_query($conexao, "INSERT INTO Usuario(nome, email, senha) VALUES('$nome', '$email','$senha')");
endif;
?>