<?php
//sessão inicio
session_start();
//conexão
require_once 'db_connect.php';
//clear
function clear($input){
    global $connect;
    //sql
    $var=mysqli_escape_string($connect,$input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar']))
    {
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = ($_POST['idade']);

    $sql="INSERT INTO clientes VALUES (DEFAULT,'$nome','$sobrenome','$email','$idade')";

    if(mysqli_query($connect,$sql))
    {
        $_SESSION['Mensagem'] = "Cadastrado com sucesso";
        header('Location: ../index.php');
    }
    else
    {
        $_SESSION['Mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    }
}



?>