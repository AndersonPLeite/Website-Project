<?php
session_start();
 if(!isset($_SESSION['logado']))
 {
     header('location:login.php');
     
 }
include_once('includes/logica/conecta.php');
include_once('includes/logica/functions.php');
include_once('includes/componentes/cabecalho.php');



    $stmt = $conexao->prepare("SELECT * FROM categorias");
    $stmt->execute();
    $categorias = $stmt->fetchAll();

   

?>
<section>
    <h2>Cadastrar livros</h2>
            <form action="includes/logica/controller.php" method="post" enctype="multipart/form-data">
            <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
            <p><label for="descricao">Descrição: </label><input type="text" name="descricao" id="descricao"></p>
            <p><label for="quantidade">Quantidade: </label><input type="number" name="quantidade" id="quantidade"></p>
            <p><select name="idcategoria">
                <?php
                    foreach($categorias as $categoria){
                ?>
                <option value="<?php echo $categoria['idcategoria']?>"><?php echo $categoria['nome']?> </option>
                <?php
                    }
                ?>
            </select></p>
            <p><label for="imagem">Imagem: </label><input type="file" name="imagem" accept="image/*"></p>
            <p><input type="submit"  name='cadastrarProd' value="Cadastrar">  </p>      
            </form>
            <?php

    if(isset($_SESSION['msgLivro']))
    { 
      echo $_SESSION['msgLivro'];
      unset($_SESSION['msgLivro']);
    }

    ?>
</section>
<section>
        <h2>Cadastrar categoria</h2>
            <form method="post" action="includes/logica/controller.php">
                <label for="search">Nova categoria:</label>
                <input type="text" id="cat" name="cat" placeholder="Digite o nome">
                <input type="submit" name="Cadastro" value="Cadastro">
            </form>
        <?php

                if(isset($_SESSION['msgCategoria']))
                { 
                    echo $_SESSION['msgCategoria'];
                    unset($_SESSION['msgCategoria']);
                }
        ?>
</section>


