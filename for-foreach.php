<?php

for($contador = 0; $contador <= 10; $contador+=1)
    {
        echo "o número do contador é: ".$contador."<br>";
    }

    $array = ["Rômulo","Lucas"];
    echo "<hr>";

//foreach sem o indice.
foreach($array as $valor)
    {
        echo $valor."<br>";
    }

echo "<hr>"; 
//foreach com o indice.
foreach($array as $indice => $valor)
    {
        echo $indice.":".$valor."<br>";
    }


?>