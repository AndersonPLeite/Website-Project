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
                <p><label for="titulo">Titulo: </label><input type="text" name="titulo" id="titulo"></p>
                <p><label for="conteudo">Conteúdo: </label><input type="text" name="conteudo" id="conteudo"></p>
                <p><label for="data_publicacao">Data de publicação: </label><input type="date" name="data_publicacao" id="data_publicacao"></p>
                <p><label for="fonte">Fonte: </label> <input type="text" name="fonte" id="fonte"></p>
                <p><label for="categoria">Categoria: </label> <input type="text" name="categoria" id="categoria"></p>
                <p><button type="submit"  name='cadastrarNoticia' value="CadastrarNoticia"> Cadastrar nova Notícia </button>  </p>      
            </form>
  
</main>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>