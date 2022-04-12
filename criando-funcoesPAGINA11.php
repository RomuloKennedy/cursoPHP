<?php

function criandoFuncao($nome)
{
    echo "meu nome é $nome";
}
criandoFuncao("Rômulo");

echo "<hr>";

function calcularMedia($nome,$n1,$n2,$n3,$n4)
{
    $media = ($n1+$n2+$n3+$n4)/4;

    if($media >= 7)
    {
        echo "o aluno $nome foi aprovado com a média de $media<br>";
    }
    else
    {
        echo "o aluno $nome foi reprovado com a média de $media<br>";
    }
}

calcularMedia("Romulo",10,8,3,7);
calcularMedia("rodolfo",6,8,4,9);




?>
