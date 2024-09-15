<?php
/*session_start();
if(!isset($_SESSION['logado']))
{
    header('location:login.php');
    
}
*/
include_once('includes/logica/conecta.php');
include_once('includes/logica/functions.php');
include_once('includes/componentes/cabecalho.php');



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
foreach($administradores as $administrador)
         
?>
<!DOCTYPE html>
<html>
<main>
    <section class="menuAdmin">
        <div>
            <a class="alteraPagina" href="alterarPessoa.php">Gerenciar Usuários</a>
        </div>
        <div>
            <a class="alteraPagina" href="emailPromocional.php">Enviar Email Promocional</a>
        </div>
        <div>
        <a class="alteraPagina" href="cadastrarAdmin.php">Gerenciar Administradores</a>

        </div>
        <div>
            <a class="alteraPagina" href="adicionarNoticia.php">Gerenciar Notícia</a>
        </div>
        <div>
            <a class="alteraPagina" href="cadastrarLivros.php">Gerenciar Livros</a>
        </div>
    </section>
    <section id="carrega">
        <h4>Bem vindo ao painel do administrador <?php echo $administrador['nome'];?></h4>
        <?php 
            include("listarUsuarios.php");
        ?>
    </section>  
    <section id="carrega2">
        
    </section> 
</main>
<script type="text/javascript" src="js/scripts.js" defer></script>
</body>
</html>


