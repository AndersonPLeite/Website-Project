<?php
  include_once('includes/logica/conecta.php');
  include_once('includes/componentes/cabecalho.php');
  include_once('includes/componentes/header.php');
  include_once('includes/logica/functions.php');
?>
<html>
<body  class="container-fluid">
    <main>
        <div class="noticias">
                <div class="noticia1">
                    <?php
                        $noticias = listarNoticia($conexao);
                        if(empty($noticias)){
                            ?>
                                <section>
                                    <p>Não há notícias cadastradas na base de dados.</p>
                                </section>
                            <?php
                        }
                        foreach($noticias as $noticia){
                                
                            ?>
                                <section>
                                    <h2><?php echo $noticia['titulo']; ?></h2><br>
                                    <p><?php echo $noticia['conteudo']; ?></p><br>
                                    <!--<p><?php echo $noticia['data_publicacao']; ?></p><br>
                                   <?php echo $noticia['fonte']; ?></p><br>-->
                                </section>
                            <?php
                        }
                    ?>
                </div>
                <div class="noticia2">
                    <a  class="alteraPagina" href="noticiaBitcoin.php"></a>
                </div>
        </div>
        
    </main>
</body>
</html>