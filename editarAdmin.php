<!DOCTYPE html>
<html>
    <title>Editar Administrador</title>
</head>
<body>

<main>
    <section>
        <legend>Editar Administrador</legend>
    <form action="logica/controller.php" method="post" enctype="multipart/form-data">
      <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $administrador['nome']; ?>"></p>
      <p><label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $administrador['email']; ?>"></p>
      <p><label for="senha">Senha: </label><input type="password" name="senha" id="senha" value="<?php echo $administrador['senha']; ?>"></p>
      <p><label for="imagem">Imagem: </label><input type="file" name="imagemAdm" accept="image/*"></p>
      <input type="hidden" id='id' name='id' value="<?php echo $administrador['id']; ?>">
      <p> <input type="submit" id='alterar' name='alterarAdmin' value="Alterar">
      </p>        
        </form>
    </section>
</main>
</body>
</html>
