<?php 

$nome = "Rodrigo de oliveira";
$a = 1;
$b = 3;
$c = 4;


// se for declarar a variavel fora da função tem que chamar ela como  'global';
function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();

/////////////////////////////////////////////////////////////////////////////////////

function exibeCidade(){
    //Escopo local, para poder usar a variável fora da função tem que declarar como global;
    global $cidade;
    $cidade = "Rio de Janeiro";

}
//Para funcinoar tem que chamar a função ' exibeCidade(); ' 
exibeCidade();
echo "<hr>".$cidade;

////////////////////////////////////////////////////////////////////////////////////

function soma(){
    
    echo "<hr>".$GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
      
}
soma();

?>