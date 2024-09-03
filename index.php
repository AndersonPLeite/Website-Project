<?php
  include_once('includes/logica/conecta.php');
  include_once('includes/componentes/cabecalho.php');
  include_once('includes/componentes/header.php');
  include_once('includes/logica/functions.php');
?>
<!DOCTYPE html>
<html>
<main>
    <section id="carrega">
      <?php 
        include("homeNoticias.php");
      ?>
    </section>
    <section id="carrega2">

    </section>   
</main>
<script type="text/javascript" src="js/scripts.js"></script>
<?php  
  include_once('includes/componentes/footer.php');
?>
</body>
</html>