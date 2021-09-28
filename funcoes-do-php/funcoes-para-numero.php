<?php

//Funções para números
/*
    number_format
    round
    ceil
    floor
    rand
*/

$db = 1234.56;

$preco = number_format($db,2,",",".");
echo "o valor do produto é R$ $preco";

//round é para arredondar o valor

echo "<hr>".round(3.5);

//ceil é para arredondar o valor sempre pra cima

echo "<hr>".ceil(4.2);

//floor é para arredondar o valor sempre pra baixo

echo "<hr>".floor(4.2);

//rand função que irá gerar números aleatórios dentro do parametro passado

echo "<hr>".rand(1,10);
?>
