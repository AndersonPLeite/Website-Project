<?php
<<<<<<< HEAD
include_once('includes/logica/functions.php');
include_once('includes/logica/conecta.php');
session_start();

$stmt = $conexao->prepare("SELECT * FROM categorias");
$stmt->execute();
$categorias = $stmt->fetchAll();

=======
/*session_start();
>>>>>>> c662315c45162efbe9c6b8bbad790f22cc63e874
if(!isset($_SESSION['logado']))
{
    header('location:login.php');
    
}
*/
include_once('includes/logica/conecta.php');
include_once('includes/logica/functions.php');
include_once('includes/componentes/cabecalho.php');

<<<<<<< HEAD
?>
   <link rel="stylesheet" href="css/styleadmin.css">
    </head>
         <h3> Listagem de Usuários </h3>
=======


$stmt = $conexao->prepare("SELECT * FROM categorias");
$stmt->execute();
$categorias = $stmt->fetchAll();

$administradores = listarAdmin($conexao);
if(empty($administradores)){
    ?>
        <section>
            <p>Não há administradores cadastrados.</p>
        </section>
>>>>>>> c662315c45162efbe9c6b8bbad790f22cc63e874
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
        <div>
            <a class="nav-link" name="sairAdm" aria-current="page" href="loginAdm.php">Sair</a>
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


