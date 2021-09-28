
<?php
//sessão
session_start();
if(isset($_SESSION['Mensagem'])){ ?>
   
    <script>
    window.onload = function(){
      M.toast({html: '<?php echo $_SESSION['Mensagem']; ?>' });
    }
   //alert('<?php echo $_SESSION['Mensagem'];?>')
    </script>

<?php
}
session_unset();

?>
