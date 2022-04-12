<?php
//Manipulação de arquivos;
/*
fopen();
fclose();
fwrite();
!feof();
fgets();
filesize
*/

$arquivo = 'arquivo.txt';
$conteudo= "conteudo de teste\r\n";

$arquivoAberto =fopen($arquivo,'r');
$tamanhoArquivo = filesize($arquivo);

while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto,$tamanhoArquivo);
    echo $linha."<br>";
}


fclose($arquivoAberto);



?>
