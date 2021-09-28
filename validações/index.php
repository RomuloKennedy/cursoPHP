<!-- VALIDAÇÕES
    //Funções (filter_input - Filter_var)
    //FILTER_VALIDATE_INT
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT
    //FILTER_VALIDATE_IP
    //FILTER_VALIDATE_URL
-->
<html>

<head>

<?php 
//O PHP Isset é um função nativa do PHP que serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso). Ou seja, caso uma variável não esteja definida, ela possui o valor nulo (null).

    if(isset($_POST['enviar-formulario']) ){
        $erros=[];
        //o primeiro parametro do filtro é o tipo de input ' no caso POST ', o segundo parametro é o nome do campo, o terceiro parametro é o filtro que a gente quer validar;
    if($_POST['Idade'] != filter_input(INPUT_POST, 'Idade', FILTER_VALIDATE_INT))
    {
        $erros[]="Idade precisa ser um inteiro";
    }
    if($_POST['Email'] != filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL))
    {
        $erros[]= "Precisa digitar um Email válido";
    }
    if($_POST['Peso'] != filter_input(INPUT_POST, 'Peso', FILTER_VALIDATE_FLOAT))
    {
        $erros[]= "O peso precisa ser um número decimal (separado por ponto)";
    }
    if($_POST['Ip'] != filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_IP))
    {
        $erros[]= "Precisa digitar um IP válido";
    }
    if($_POST['URL'] != filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_URL))
    {
        $erros[]= "Precisa digitar uma URL válida";
    }

    if($erros != null ){
        foreach($erros as $erro){
            echo "<li> $erro </li>";
        }
    }
}
    ?>
</head>
<body>
                    <!-- USAMOS A Superglobal $_SERVER para retornar a página em que está sendo executada o código -->
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>"method = "POST" >
    Idade: <input type='text' name = "Idade"><br>
    Email: <input type='text'name = 'Email'><br>
    Peso.:  <input type='text'name = 'Peso'><br>
    Ip......:<input type='text'name = 'Ip'><br>
    URL..:<input type='text'name = 'URL'><br>
    <button type='submit' name='enviar-formulario'>Enviar</button><br>
    </form>

</body>


</html>