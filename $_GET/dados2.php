<?php

$nome = $_GET['Nome'];
$email = $_GET['Email'];

/*echo "seu nome é $nome e seu email é $email.<br>";   Comentei apenas para utilizar outro metódo sem precisar declarar variáveis*/

echo $_GET['Nome']." ".$_GET["Sobrenome"]." Sua idade é :".$_GET['Idade']."<br>".$_GET['Email'];
echo "<a href=\"javascript:history.go(-1)\">Enviar Novos Dados</a>"


?>