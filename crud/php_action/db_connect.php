<?php
//conexão com o banco de dados;

$servername ="localhost:3306";
$username="root";
$password="";
$db_name="crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()){
    echo "erro na conexão: ".mysqli_connect_error();
}