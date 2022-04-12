<?php 
// Constante é o identificador para um valor único, e o valor não pode alterar durante a execução do script;

define("nome","José Carlos");
define("idade",23);
define("altura",1.69);
define("boole",true);

echo nome.", minha idade é ".idade." minha altura é ".altura." e os dados são ".boole. "<hr>";

var_dump(nome, idade , altura , boole);

// Constante do tipo array;

define("Times",['Vasco','Flamengo','Botafogo']);

echo "<hr>".Times[0]."<hr>";
var_dump(Times);

function exibeNome(){
    echo "<hr>";
    echo nome;
}
// Conseguimeos acessar a constante no escopo local mesmo sem declara-la como global pois toda constante É GLOBAL ;
exibeNome();
?>
