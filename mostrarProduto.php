<!DOCTYPE html>
<html>

<?php
include_once('includes/componentes/cabecalho.php');
include_once('includes/componentes/header.php');
include_once('includes/logica/funcoes_pessoa.php');
include_once('includes/logica/conecta.php');
?>
   <title>Listar Livro</title>
</head>
<body>  
<body>

<main>
         <h2> Usuário Logado:  <?php echo $_SESSION['nome']; ?>  </h2>
         <h3> Pesquisa de Usuários </h3>
    <?php

        if(empty($produtos)){
            ?>
                <section>
                    <p>Não há livros cadastrados.</p>
                </section>
            <?php
        }
        else
        {
        foreach($produtos as $produto){
                 
            ?>
                <section>
                    <p>Nome: <?php echo $produto['nome']; ?></p>
                    <p>Descricao <?php echo $produto['descricao']; ?></p>
                    <p>Quantidade: <?php echo $produto['quantidade']; ?></p>
                    <p>Imagem: <img src="imagens/<?php echo $produto['imagem'];?>" width='200px' height='200px'/></p>                                                         
                </section>
            <?php
        }
    }
    ?>
</main>
<?php require('includes/componentes/footer.php');?>
</body>
</html>