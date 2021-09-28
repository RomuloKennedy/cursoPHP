<?php
session_start();

$_SESSION['cor']= "verde";
$_SESSION['carro']="fiesta";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();



?>