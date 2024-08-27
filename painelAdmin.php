<?php
include_once('includes/componentes/cabecalho.php');
include_once('includes/logica/functions.php');
include_once('includes/logica/conecta.php');
/*session_start();
if(!isset($_SESSION['logado']))
{
     header('location:index.php');
    
}
*/
?>
   
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
     <h1>Inserir livros</h1>
        <section>
            <form action="includes/logica/controller.php" method="post" enctype="multipart/form-data">
            <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
            <p><label for="descricao">Descrição: </label><input type="text" name="descricao" id="descricao"></p>
            <p><label for="quantidade">Quantidade: </label><input type="number" name="quantidade" id="quantidade"></p>
            <p><label for="imagem">Imagem: </label><input type="file" name="imagem" accept="image/*"></p>
            <p><button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>      
            </form>
        </section>
    </main>
    </body>
    <script type="text/javascript" src="js/scripts.js"></script>
</html>


