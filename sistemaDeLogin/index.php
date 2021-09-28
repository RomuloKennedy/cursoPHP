<?php 
//conexão
require_once 'db_connect.php';

//session 
session_start();
if(isset($_POST['btnEntrar'])){
    $erros = [];
                                //o primeiro parametro é a conexão com o nosso banco de dados, no meu caso a variavel connect definida em db_connect.php;
                                //O mysqli escape serve para retirar todas as tags htmls e php de todos os dados fornecidos, ou seja é útil para fazer uma limpeza no comando inserido pelo usuario, evitando assim um hack inserir um comando do tipo DROP TABLE;
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    if(empty($login) || empty($senha) ){
        $erros[]= '<li> o campo login/senha precisa ser preenchido </li>';
    }
    else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0 ){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login ='$login' and senha = '$senha' ";
            $resultado = mysqli_query($connect,$sql);

            if(mysqli_num_rows($resultado) == 1 ){
                //fetch array vai servir para transformar a variavel $resultado em um array; 
                $dados= mysqli_fetch_array($resultado); 
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            }
            else{
                $erros[]= "<li> login e senha não conferem </li>";
            }
        }
        else{
            $erros[]='<li> usuário inexistente </li>';
        }
    }
    
}

?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <h1>Login</h1>
        <?php if(!empty($erros) ){
            foreach($erros as $erro){
                echo $erro."<br>";
            }
        } ?>
        <hr>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Login:<input type ="text" name="login"><br>
            Senha:<input type = "password" name="senha"><br>
            <button type="submit" name="btnEntrar">Entrar</button>  
        </form>
    </body>
    </html>