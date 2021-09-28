<?php
/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays em um único array.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array. OBS: Deve ser informado no primeiro parametro aquilo que contem de objeto para separação..
 * implode("-", $array) = transforma array em string.
 */



$nomes = ["eu"=>"Rômulo","meu amigo"=>"Lucas","meu amigo2"=>"Araujo","meu amigo3" => "Andrade"];

if(is_array($nomes))
{
    echo "é um array<br>";
}
else
{
 echo "não é um array<br>";
}
/*              in_array                     */
// retorna se existe determinado elemento dentro do array ' ele leva em consideração as letras maiusculas e minusculas e também os acentos';
echo in_array("Rômulo",$nomes)."<br>";
/*              array_keys($array)           */
//retorna um novo arrays com os indices dos arrays passado como parâmetro
$keys = array_keys($nomes);
print_r($keys);
echo "<br>";
/*              array_values($array)         */
//retorna um novo array com os valores do array passado como parâmetro.
$values =array_values($nomes);
print_r($values);
echo "<br>";
/*              array_merge($array1, $array2)*/
//agrega o conteúdo dos dois arrays em um único array.
$merge = array_merge($keys,$values);
print_r($merge);
echo "<br>";
/*              array_pop()                  */
//exlui a ultima posição do array.
array_pop($merge);
print_r($merge);
echo "<br>";
/*              array_shift($array)          */
//exclui a primeira posição do array.
array_shift($merge);
print_r($merge);
echo "<br>";
/*              array_unshift($array,"valor")*/
//adiciona um ou mais elementos no início do array.
array_unshift($merge,"unshift");
print_r($merge);
echo "<br>";
/*     array_push($array, "valor1", "valor2")*/
//adiciona um ou mais elementos no final do array.
array_push($merge,"push","push2");
print_r($merge);
echo "<br>";
/*     array_combine($keys, $values)         */
//mescla os dois arrays passados. transforma o primeiro em indice e o segundo em resultado do indice.
$mesclados = array_combine($keys,$values);
print_r($mesclados);
echo "<br>";
/*     array_sum()                           */
//Calcula a soma dos elementos de array.
$soma = [0,1,2,3,4,5];
echo array_sum($soma)."<br>";
/*     explode(" / ", "20/01/2001")          */
//transforma strings em array. OBS: Deve ser informado no primeiro parametro aquilo que contem de objeto para separação. no caso aqui vou usar o espaço
$string = "Olá mundo grande";
$string2 =explode(" ", $string);
print_r($string2);
echo "<br>";
/*     implode("-", $array)                 */
//transforma array em string.
$string3 = implode("--",$string2);
echo $string3;
?>