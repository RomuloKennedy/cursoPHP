<?php
include_once 'header.php';
?>

<?php echo "olá pessoal <br>"; ?>

<?php 
// o metodo _once é usado para verificar se o conteúdo já foi incluido anteriormente, caso ja´tenha sido incluido ele só irá apresentar 1;
include_once 'footer.php';
?>


<?php
//a diferença do require para o include é que o require caso tenha o endereço da página errada ele irá mostrar uma mensagem de erro;
//já o include irá processar o script normalmente junto com a mensagem de erro;
require_once 'header.php';
?>

<?php echo "olá pessoal <br>"; ?>

<?php 
require_once 'footer.php';
?>
