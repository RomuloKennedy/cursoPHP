<?php

/*  *operadores lógicos
    *Nos permitem fazer comparações entre expressões
    -E(&& - and)
    -OU(|| - or) // Só retorna verdadeiro quando 1 das duas premissas são verdadeiras ou quando as 2 são verdadeiras
    -ou exclusivo (xor) // Retorna verdadeiro quando somente 1 das duas premissas são verdadeiras, se as duas forem verdadeiras ou falso ele ira retornar falso;
    -negação (!)
*/

$nome = "romulo";
$sobrenome = "kennedy";

if (($nome == "romulo") && ($sobrenome == "kennedy"))
    {
        echo "O nome é ".$nome." ".$sobrenome;

    }
    else
    {
        echo "o nome e sobrenome estão incorretos";
    }















?>