<?php

//Expressões regulares
//Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
//^ inicio da expressão, $ final da expressão - /i - case sensitive
//[] conjunto de caracteres
//{} ocorrências - ?{0,1} * {0,} + {1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

$string = "c";
//$padrao = "/^abc$/";
//$padrao = "/c$/";
//$padrao = "/^[a-z]$/";
//$padrao = "/^[a-z0-9]$/";
//$padrao = "/^[a-z0-9]$/i";  //o I serve para ignorar caso a letra seja minuscula ou maiuscula; (case sensitive);
//$padrao = "/^[a-z0-9]{1,4}$/i"; // os números entre chaves servem para difinir até quantas letras vão ser lidas na string;  OCORRÊNCIAS;
$padrao = "/^[a-z0-9]*$/i"; // o * aceita de 0 a várias OCORRÊNCIAS;
if(preg_match($padrao,$string)){
    echo "Válido";
    echo "<hr>";
    echo $string;

}
else{
    echo "Inválido";
    echo "<hr>";
}