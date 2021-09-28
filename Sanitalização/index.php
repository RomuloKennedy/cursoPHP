<!-- Sanitização
    //Funções (filter_input - Filter_var)
    //FILTER_SANITIZE_SPECIAL_CHARS
    //FILTER_SANITIZE_NUMBER_INT
    //FILTER_SANITIZE_EMAIL
    //FILTER_SANITIZE_URL
-->
<html>

<head>

<?php 
//O PHP Isset é um função nativa do PHP que serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso). Ou seja, caso uma variável não esteja definida, ela possui o valor nulo (null).

    if(isset($_POST['enviar-formulario']) ){
        //Array de erros;
        $erros=[];
        //Sanitize
        $nome = filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);

        $idade = filter_input(INPUT_POST,'Idade',FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade,FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um número inteiro";
        }

        $email = filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $erros[] = "Precisa inserir um email válido";
        }
        $url = filter_input(INPUT_POST,'URL',FILTER_SANITIZE_URL);
        
        if(!filter_var($url,FILTER_VALIDATE_URL)){
            $erros[] = "URL tem que ser uma URL válida";
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
    Nome.:  <input type='text'name = 'Nome'><br>
    Idade: <input type='text' name = "Idade"><br>
    Email: <input type='text'name = 'Email'><br>    
    URL..:<input type='text'name = 'URL'><br>
    <button type='submit' name='enviar-formulario'>Enviar</button><br>
    </form>

</body>


</html>