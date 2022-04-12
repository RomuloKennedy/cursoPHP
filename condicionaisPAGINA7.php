<?php 


for($numero = 31; $numero != 28; $numero -=1){

    //AQUI NESSE ECO UTILIZAMOS OPERADORES TERNÁRIOS
    echo ($numero == 30) ? "Sim<br>" : "Não<br>";


if ($numero == 30){
    echo "o número é igual a 30<br>";
    
}
elseif($numero < 30){
    echo "o número é menor que 30<br>";
}
else{
    echo "o número é maior que 30<br>";
}
}

echo "<hr>";
//Switch
switch($numero){
    case 29:
        echo "o número é 29";
        break;

    case 30:
        echo "o número é 30";
        break;

    default:
        echo " o número não é 29 nem 30";
        break;
}
?>
