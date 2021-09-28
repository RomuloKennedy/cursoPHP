<?php
//datas

//Usado para setar a hora:
date_default_timezone_set('America/Sao_Paulo');

echo date('Y')."<br>";
echo date('y')."<hr>";
echo date('m')."<br>";
echo date('M')."<hr>";
echo date('d')."<br>";
echo date('D')."<br>";
echo "<hr>".date('y/m/d H:i:s' );
echo "<br>".date('Y/M/D');

$date = date('Y/m/d'); // DATE

echo "<hr>".$date;

$dateTime = date('Y/m/d H:i:s');

echo "<br>".$dateTime;

//a função time() retorna a quantidade de segundos que se passaram de 1970 até agr
echo "<hr>".time();

// MKTIME

$dataPagamento = mktime(15,30,00,07,15,2023);

echo "<hr>".date('d/m/y - h:i',$dataPagamento);

$data ='2021-04-10 13:30:00';

$data =strtotime($data);

echo '<hr>'.date('d/m/y : H:i:s',$data);

?>