<?php 

//funçoes para strings
/* 
    strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos

*/

$nome = "Romulo";
//strtoupper() "deixa a string toda em maisucula";
$upper = strtoupper($nome);
//strtolower() "deixa a string toda em minuscula";
$lower = strtolower($nome);
echo $upper; // também poderia ser "  echo strtoupper($nome); "

echo "<br>".$lower;

//substr() "decide de que ponto vai iniciar e terminar a string";
$mensagem = "Good morning lord";
echo "<hr>".$mensagem;
echo "<br>".substr($mensagem,4);

echo "<br>".substr($mensagem,4,8);

//str_pad() " adiciona caracteres ou letras antes e depois da string";

echo "<hr>";

$objeto = "mouse";

$novoObjeto = str_pad($objeto,7,"*",STR_PAD_LEFT);
echo $novoObjeto."<br>";
$novoObjeto = str_pad($objeto,7,"*",STR_PAD_BOTH);
echo $novoObjeto;

//str_repeat "repete a string";

$string = str_repeat("Teste: ",3);
echo "<hr>".$string;

//strlen  "determina o tamanho da string";

echo "<hr>".strlen($nome);

//str_replace " substitui uma palavra selecionada por outra ";

$texto = "O Brasil irá ganhar a copa do mundo em 2022.";
$novotexto = str_replace("O Brasil","A Argentina",$texto);
echo "<hr>".$novotexto;

//strpos   " retorna a posição ";

?>
