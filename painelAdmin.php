<?php
include_once('includes/logica/functions.php');
include_once('includes/logica/conecta.php');
session_start();

$stmt = $conexao->prepare("SELECT * FROM categorias");
$stmt->execute();
$categorias = $stmt->fetchAll();

if(!isset($_SESSION['logado']))
{
    header('location:login.php');
    
}

?>
   <link rel="stylesheet" href="css/styleadmin.css">
    </head>
         <h3> Listagem de Usuários </h3>
    <?php
        $pessoas = listarPessoa($conexao);
        if(empty($pessoas)){
            ?>
                <section>
                    <p>Não há usuários cadastrados.</p>
                </section>
            <?php
        }
        foreach($pessoas as $pessoa){
                 
            ?>
                <section>
                    <p>Nome: <?php echo $pessoa['nome']; ?></p>
                    <p>Email <?php echo $pessoa['email']; ?></p>
                    <p>CPF: <?php echo $pessoa['cpf']; ?></p>
                    <p>Imagem: <img src="imagens/<?php echo $pessoa['imagem'];?>" width='100px' height='100px'/></p>
                    
                    <form action="includes/logica/controller.php" method="post">
                        <button type="submit" name="editar" value="<?php echo $pessoa['codpessoa']; ?>"> Editar </button>
                        <button type="submit" name="deletar" value="<?php echo $pessoa['codpessoa']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
                    </form>
                    <br><br>                                                          
                </section>
            <?php
        }
    ?>
        <section>
            <h2>Cadastrar novo administrador</h2>
            <form action="includes/logica/controller.php" method="post" enctype="multipart/form-data">
            <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
            <p><label for="email">email: </label><input type="text" name="email" id="email"></p>
            <p><label for="senha">Senha: </label> <input type="password" name="senha" id="senha"></p>
            <p><label for="imagem">Imagem: </label><input type="file" name="imagemAdm" accept="image/*"></p>
            <p><button type="submit"  name='cadastrarAdm' value="CadastrarAdm"> Cadastrar Administrador </button>  </p>      
            </form>
        </section>
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
            <a href="login.php">Login</a>
        </section>
    </main>
    </body>
    <script type="text/javascript" src="js/scripts.js"></script>
</html>


