<html>


    <body>
        <?php 
        
        if(isset($_POST['enviar-formulario']))
        {
            $formatospermitidos = ["png","jpeg","jpg","gif"];
            $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

            //echo $extensao;
            if(in_array($extensao,$formatospermitidos) )
            {
                $pasta="Arquivos/";
                $temporario=$_FILES['arquivo']['tmp_name'];
                $novoNome=uniqid().".$extensao";

                if(move_uploaded_file($temporario,$pasta.$novoNome)){
                    echo "upload feito com sucesso";
                }
                else{
                    echo "Erro, não foi possivel fazer o upload";
                }
            }
            else{
                echo "Não existe";
            }

        }
        

        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'
        enctype='multipart/form-data'>
        <input type = 'file' name= 'arquivo'>
        <input type ='submit' name= 'enviar-formulario'>
        </form>
    </body>

</html>