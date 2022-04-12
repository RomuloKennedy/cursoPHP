<?php

//o base64 serve para criptografar e descriptografar o texto selecionado;

$senha="123456";

$novasenha=base64_encode($senha);

echo "Senha criptografada: ".$novasenha."<br>";
echo "Senha sem criptografia: ".base64_decode($novasenha);
echo "<hr>";

//com o MD5 não conseguimos descriptografar; 
echo "Senha com MD5: ".md5($senha)."<br>";
//Com o sha1 também nao conseguimos descriptografar;
echo "Sha1: ".sha1($senha);
?>
