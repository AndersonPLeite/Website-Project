<!DOCTYPE html>
<html>
<?php
include_once('includes/componentes/cabecalho.php');
include_once('includes/componentes/header.php');
include_once('includes/logica/funcoes_pessoa.php');
include_once('includes/logica/conecta.php');
session_start();
if(!isset($_SESSION['logado']))
{
     header('location:login.php');
    
}
?>
<main>
<section id="carrega">
  <?php 
        include("listar.php");
  ?>
    </section>
    <section id="carrega2">

    </section>   
</main>
<?php require('includes/componentes/footer.php');?>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>