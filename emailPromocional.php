<?php
    include_once('includes/logica/conecta.php');
    include_once('includes/componentes/cabecalho.php');
    include_once('includes/logica/functions.php');
?>
<body>
    <legend>Enviar email promocional</legend>
    <form action="include/logica/controller.php" method="POST">
        Escreva uma Mensagem: 
        <textarea name="mensagem" rows="5" cols="50"></textarea> <br />
        <input type="submit" name="enviarEmailPromo" value="ENVIAR" />

    </form>
    <script type="text/javascript" src="js/scripts.js" defer></script>
</body>