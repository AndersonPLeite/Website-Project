
<?php
 include_once('includes/logica/conecta.php');
 include_once('includes/logica/functions.php');
 include_once('includes/componentes/cabecalho.php');
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
<body>

<main>
    <section>
    <form action="#" method="post" onsubmit="crudUsuario(event)">
      <p> <label for="foto"><img src="imagens/<?php echo $pessoa['imagem'];?>" width='100px' height='100px'/></label></p>
      <p></p><label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $pessoa['nome']; ?>"></p>
      <p></p><label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $pessoa['email']; ?>"></p>
      <p></p><label for="cpf">CPF: </label><input type="text" name="cpf" id="cpf" value="<?php echo $pessoa['cpf']; ?>"></p>
      <p></p><label for="senha">Senha: </label><input type="password" name="senha" id="senha" value="<?php echo $pessoa['senha']; ?>"></p>
      <input type="hidden" id='codpessoa' name='codpessoa' value="<?php echo $pessoa['codpessoa']; ?>">
      <p> <input type="submit" id='alterar' name='alterar' value="Alterar">
      </p>        
        </form>
    <?php }?>
    </section>

</main>
<script src="text/javascript" src="js/scripts.js"></script>
</body>
</html>