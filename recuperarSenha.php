<?php

    include_once('includes/componentes/cabecalho.php');
    include_once('includes/componentes/header.php');
    include_once('includes/logica/functions.php');
    include_once('includes/logica/conecta.php');
    
if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');

 

  $utilizador = $_GET['utilizador'];
  $confirmacao =  $_GET['confirmacao'];
  $array=array($utilizador,$confirmacao);
  $recuperacao=recuperarSenha($conexao,$array);
  if($recuperacao)
 {
     echo "entrou";
       $deletar=deletarRecuperacao($conexao,$array);
     if($deletar)
     {
 ?>   
 
        <form action="includes/logica/controller.php" method="post">
            <input type="hidden" name="email" value="<?php echo $utilizador ?>" />
           Nova Senha: <input type="password" name="novasenha" />
            <input type="submit" name="alterarsenha" value="Alterar Senha" />
        </form>
 
 <?php 
     }
 }
 else
 {
      echo '<p>Não é possível alterar a password: dados incorretos</p>';
     
 }
  
  
    
    
    
?>