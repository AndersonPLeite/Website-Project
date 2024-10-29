<?php

    $noticias = selecionaNoticia($conexao,$array);
    foreach($noticias as $noticia){
        ?>
        
            <section>
                    <h2><?php echo $noticia['titulo']; ?></h2>
                    <p><?php echo $noticia['conteudo']; ?></p>
                    <p><?php echo $noticia['fonte']; ?></p>
            </section>
        <?php
    }
       
?>