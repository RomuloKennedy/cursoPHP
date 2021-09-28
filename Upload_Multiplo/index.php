<html>

<body>
    <?php
   
    if(isset($_POST['enviar-formulario'])){
        $formatospermitidos = ["png","jpeg","jpg","gif"];
        $contador = 0;
        $quantidadeArquivos = count($_FILES['arquivo']['name']);

        while($contador < $quantidadeArquivos){
            
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);

        if(in_array($extensao,$formatospermitidos) )
        {
            $pasta="Arquivos";
            $temporario=$_FILES['arquivo']['tmp_name'][$contador];
            $novoNome=uniqid().".$extensao";
            
            if(move_uploaded_file($temporario,$pasta.$novoNome)){
                echo "$temporario.$novoNome upload feito com sucesso<br>";
            }
            else{
                echo "Erro, não foi possivel fazer o upload<br>";
            }
        }
        else{
            echo "erro<br>";
        }
        $contador +=1;
     }
    }

    ?>
    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'
        enctype ="multipart/form-data">
        <input type='file' name='arquivo[]' multiple><br>
        <input type='submit' name='enviar-formulario'>


        </form>    

</body>


</html>