<?php
include_once('includes/componentes/cabecalho.php');
include_once('includes/logica/functions.php');
include_once('includes/logica/conecta.php');
session_start();
if(!isset($_SESSION['logado']))
{
     header('location:login.php');
    
}
?>
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
                    <p>Imagem: <img src="imagens/<?php echo $usuario['imagem'];?>" width='100px' height='100px'/></p>            
                    
                </section>
            <?php
        }
    ?>
   
</main>
</body>
</html>