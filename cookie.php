<?php 
//COOKIE
//         Nome   Valor           validade
setcookie('user','João da Silva',time()+3600);
setcookie('email','romulokenede@hotmail.com',time()-3600);
setcookie('última_pesquisa','tênis_adidas',time()+3600);

var_dump($_COOKIE);

echo $_COOKIE['user'];
?>