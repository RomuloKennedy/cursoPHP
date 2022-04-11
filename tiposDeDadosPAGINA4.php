<?php 

// String
$nome = "Rômulo";
var_dump($nome);

if(is_string($nome)){
    echo "é string";
}
else{
    echo "não é string";
}
echo "<hr>";

// Inteiro

$num = 123;
var_dump($num);

if(is_int($num)){
    echo "é inteiro";
}
else{
    echo "não é inteiro";
}
echo "<hr>";

// Float

$decimal = 8.23;
var_dump($decimal);

if(is_float($decimal)){
    echo "é float";
}
else{
    echo "não é float";
}
echo "<hr>";

//Boleano

$bool = true;
var_dump($bool);

if(is_bool($bool)){
    echo "é boleano";
}
else{
    echo "não é boleano";
}
echo "<hr>";

// Array

$carros = array("gol","fiesta","ford",12,20.6,true);
var_dump($carros);
echo "<hr>";

// Object

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
    $cliente->atribuirNome("Rodolfo");
    var_dump($nome);

    if(is_object($cliente)){
        echo "<br>é objeto";
    }
    else{
        echo "<br>  não é objeto";
    }
    echo "<hr>";

//Epesciais
//Null
$cidade = null;
var_dump($cidade);

//Resource
?>
