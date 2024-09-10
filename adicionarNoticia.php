<?php
  include_once('includes/logica/conecta.php');
  include_once('includes/componentes/cabecalho.php');
  include_once('includes/logica/functions.php');
?>
<!DOCTYPE html>
<html>
<main>
    <h2>Cadastrar nova Notícia</h2>
            <form action="includes/logica/controller.php" method="post" enctype="multipart/form-data">
                <p><label for="titulo">Titulo: </label><input type="text" name="nome" id="nome"></p>
                <p><label for="conteudo">Conteúdo: </label><input type="text" name="email" id="email"></p>
                <p><label for="Fonte">Fonte: </label> <input type="password" name="senha" id="senha"></p>
                <p><button type="submit"  name='cadastrarNoticia' value="CadastrarNoticia"> Cadastrar nova Notícia </button>  </p>      
            </form>
  
</main>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>