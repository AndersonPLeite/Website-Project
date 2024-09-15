<?php
include_once('includes/logica/conecta.php');
include_once('includes/logica/functions.php');
include_once('includes/componentes/cabecalho.php');

session_start();

$stmt = $conexao->prepare("SELECT * FROM categorias");
$stmt->execute();
$categorias = $stmt->fetchAll();
$administradores = listarAdmin($conexao);
if(empty($administradores)){
    ?>
        <section>
            <p>Não há administradores cadastrados.</p>
        </section>
    <?php
}
foreach($administradores as $administrador){
                 
    ?>
        <section>
            <p> <img src="imagens/<?php echo $administrador['foto_perfil'];?>" width='100px' height='100px'/></p>
            <p>Nome: <?php echo $administrador['nome']; ?></p>
            <p>Email: <?php echo $administrador['email']; ?></p>
            
            <form action="includes/logica/controller.php" method="post">
                <input type="hidden" name="id" value="<?php echo $administrador['id']; ?>">
                <button type="submit" class="alteraPagina" name="editarAdmin" value="<?php echo $administrador['id']; ?>"> Editar </button>
                <button type="submit" name="deletarAdmin" value="<?php echo $administrador['id']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
            </form>
            <br><br>                                                          
        </section>
    <?php
}

         

/*if(!isset($_SESSION['logado']))
{
    header('location:loginAdm.php');
    
}
*/

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
<script type="text/javascript" src="js/scripts.js"></script>
