<?php 

// Variáveis Superglobais

/*
    $GLOBALS    //SERVE PARA CHAMAR VARIÁVEIS FORA DO ESCOPO, TEM QUE DECLARAR AS VARIÁVEIS COMO GLOBAL PARA PODER ACESSAR
    $_SERVER    //CONTÉM VÁRIAS INFORMAÇÕES DO SERVER, PARA OBTER AS INFORMAÇÕES DE DETERMINADO CAMINHO DO SERVER BASTA CHAMA-LÁ
    $_POST      //SERVE PARA ACESSAR O CONTEÚDO DE FORMULÁRIOS HTML     PARA MAIS DETALHES >> https://www.todoespacoonline.com/w/2014/07/post-em-php/    
    $_GET       //SERVE PARA RECOLHER DADOS ASSIM COMO O POST, PORÉM TAMBÉM PODEMOS ENVIAR DADOS VIA SCRIPT QUE NÃO SEJA NO FORMULÁRIO;
    $_FILES
    $_ENV
    $_REQUEST
    $_COOKIE
    $_SESSION

*/

// $GLOBALS
$x = 10;
$y = 11;


function soma(){
    // PODE SOMENTE DECLARAR AS VARIÁVEIS FORA DO ESCOPO COMO GLOBAL;
    global $x;
    global $y;
    echo $x + $y."<br>";
    // OU PODE TAMBÉM CHAMA-LAS DIRETAMENTE COMO VARIÁVEIS GLOBAIS, OS DOIS DÃO NO MESMO RESULTADO;
    echo $GLOBALS["x"] + $GLOBALS["y"]."<br>";
}
soma();

// $_SERVER

echo "<hr>".$_SERVER["SERVER_NAME"];
echo "<br>".$_SERVER["PHP_SELF"];
echo "<br>".$_SERVER["SCRIPT_FILENAME"];
echo "<br>".$_SERVER["DOCUMENT_ROOT"];
echo "<br>".$_SERVER["SERVER_PORT"];
echo "<br>".$_SERVER["REMOTE_ADDR"];

//$_POST 
/* CONTEÚDO NA PASTA DE $_POST */
?>
