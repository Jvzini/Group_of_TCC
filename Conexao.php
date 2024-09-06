<?php
$host="sql.freedb.tech";
$user="freedb_Joao_Vitor";
$pass="4Vpauh#e$5&bghN";
$banco="freedb_GenesFlix";
$conexao=mysqli_connect($host, $user, $pass,
$banco) or die(mysql_error());
mysqli_select_db($banco) or die(mysql_error());
?>