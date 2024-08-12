<?php
include_once('includes/componentes/cabecalho.php');
include_once('includes/logica/funcoes_pessoa.php');
include_once('includes/logica/conecta.php');
session_start();
if(!isset($_SESSION['logado']))
{
     header('location:login.php');
    
}
?>
    <link rel="stylesheet" href="assets/css/listarUsuarios.css">
    <title>Bolsacripto</title>
</head>
<body>
<?php require('includes/componentes/header.php') ?>
<main>
    <?php
       // $email = $_SESSION['email'];
        $usuarios = listarPessoa($conexao);
        if(empty($usuarios)){
            ?>
                <section>
                    <p>Não há usuários cadastrados.</p>
                </section>
            <?php
        }
        
        foreach($usuarios as $usuario){
                 
            ?>
                <section>
                    <p>Nome: <?php echo $usuario['nome']; ?></p>
                    <p>Email <?php echo $usuario['email']; ?></p>
                                    
                    
                </section>
            <?php
        }
    ?>
</main>
<?php require('includes/componentes/footer.php');?>
</body>
</html>