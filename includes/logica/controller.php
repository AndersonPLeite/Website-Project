<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    session_start();
    //identificação para a chamada da classe
        require "../../email/PHPMailer/src/PHPMailer.php";
        require "../../email/PHPMailer/src/SMTP.php";
        require "../../email/PHPMailer/src/Exception.php";
       require_once('../../email/envia_email.php');
    require_once('conecta.php');
    require_once('functions.php');

#CADASTRO PESSOA
    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $array = array($nome, $email, $cpf, $senha);
        $retorno= inserirPessoa($conexao, $array);
        if($retorno)
        {
               $hash=md5($email);
               $link="<a href='localhost/bc/valida_email.php?h=".$hash."'> Clique aqui para confirmar seu cadastro </a>";
              $mensagem="<tr><td style='padding: 10px 0 10px 0;' align='center' bgcolor='#669999'>";
        
               $mensagem.="Email de Confirmação <br>".$link."</td></tr>";
               $assunto="Confirme seu cadastro";
              

         $mail = new PHPMailer();


        $mail->isSMTP();

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];

        $mail->Username = 'siteprojetotsi@gmail.com';
        $mail->Password = 'ydzu hdnv azoq ceca';

        $mail->setFrom('siteprojetotsi@gmail.com','Adm Site');
    
        $mail->addAddress($email, $nome );
        

        $mail->CharSet = "utf-8";


        $mail->Subject = $assunto;

        $mail->Body = $mensagem;

        $mail->isHTML(true);

        $mail->send();

              $_SESSION["msg"]= "Valide o Cadastro no email";
              

        }
        else
        {
               $_SESSION["msg"].= 'Erro ao inserir <br>';
        }
  //      die();
        header('location:../../login.php');
    }
#ENTRAR
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $array = array($email);
        $pessoa = acessarPessoa($conexao,$array,$senha);
        if($pessoa){
            $_SESSION['logado'] = true;
            $_SESSION['codpessoa'] = $pessoa['codpessoa'];
            $_SESSION['nome'] = $pessoa['nome'];
            header('location:../../index.php');
        }
        else{
            $_SESSION['msg']="Usuário Inválido";
            header('location:../../login.php');
        }
    }
#SAIR
    if(isset($_POST['sair'])){
            session_start();
            session_destroy();
            header('location:../../login.php');
    }
#EDITAR PESSOA
    if(isset($_POST['editar'])){
    
            $codpessoa = $_POST['editar'];
            $array = array($codpessoa);
            $pessoa=buscarPessoa($conexao, $array);
            require_once('../../alterarPessoa.php');
    }    
#ALTERAR PESSOA
    if(isset($_POST['alterar'])){
    
            $codpessoa = $_POST['codpessoa'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $senha = $_POST['senha'];    
            $array = array($nome, $email, $cpf, $senha, $codpessoa);
            alterarPessoa($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR PESSOA
    if(isset($_POST['deletar'])){
        $codpessoa = $_POST['deletar'];
        $array=array($codpessoa);
        deletarPessoa($conexao, $array);

        header('Location:../../index.php');
    }

#PESQUISAR PESSOA
    if(isset($_POST['pesquisar'])){
        $nome = $_POST['nome'];
        $array=array("%".$nome."%");
        $pessoas=pesquisarPessoa($conexao, $array);
        require_once('../../mostrarPessoa.php');
    }
#ALTERAR PERFIL
    if(isset($_POST['alterarPerfil'])){
    
            $codpessoa = $_POST['codpessoa'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $senha = $_POST['senha'];    
            $array = array($nome, $email, $cpf, $senha, $codpessoa);
            alterarPessoaPerfil($conexao, $array);

            header('location:../../alterarPerfil.php');
    }

#EMAIL PROMOCIONAL
if (isset($_POST['ENVIAR'])) 
{
$mensagem = $_POST['mensagem'];

$assunto="Promoção do dia";

        
        $mail = new PHPMailer();


        $mail->isSMTP();

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];

        $mail->Username = 'siteprojetotsi@gmail.com';
        $mail->Password = 'ydzu hdnv azoq ceca';

        $mail->setFrom('siteprojetotsi@gmail.com','Adm Site');
        $pessoas=listarPessoa($conexao);
        foreach($pessoas as $pessoa){
            $email = $pessoa['email'];
            $nome = $pessoa['nome'];
            $mail->addAddress($email, $nome );
        }

        


        $mail->CharSet = "utf-8";


        $mail->Subject = $assunto;

        $mail->Body = $mensagem;

        $mail->isHTML(true);

        $mail->send();
    
       
        header('Location:../../index.php');
}
#RECUPERAR SENHA
 if(isset($_POST['recuperar'])){
        $email = $_POST['email'];
        $array = array($email);
        $pessoa = perdeuSenha($conexao,$array);
        if($pessoa){

            $chave = sha1(uniqid(mt_rand(), true));
            $array2 = array($email,$chave);
            $recuperacao=inserirRecuperacao($conexao,$array2);
            echo $recuperacao;
              $mail = new PHPMailer();

        $link= "http://localhost/recuperarSenha.php?utilizador=$email&confirmacao=$chave";

        $mensagem= "Clique no link para recuperar sua senha ".$link;
        
        $assunto="Recuperação de Senha";

        $mail->isSMTP();

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];

        $mail->Username = 'siteprojetotsi@gmail.com';
        $mail->Password = 'ydzu hdnv azoq ceca';

        $mail->setFrom('siteprojetotsi@gmail.com','Adm Site');
    
        $mail->addAddress($email);
        

        $mail->CharSet = "utf-8";


        $mail->Subject = $assunto;

        $mail->Body = $mensagem;

        $mail->isHTML(true);

        $mail->send();
        $_SESSION["msg"].= 'Clique no link do email enviado para recuperar a senha <br>';
        }
        else
        {
             $_SESSION["msg"].= 'Email não existe <br>';
    
        }
        header('location:../../login.php');
    }
    
#NOVA SENHA
 if(isset($_POST['alterarsenha'])){
        $novasenha = $_POST['novasenha'];
        $novasenhacripto = password_hash($_POST['novasenha'], PASSWORD_DEFAULT);
        $email= $_POST['email'];
        
        $array = array($novasenhacripto,$email);
        $pessoa = alterarSenha($conexao,$array);
        header('location:../../login.php');
        
}
session_start();
//identificação para a chamada da classe
require_once('conecta.php');
require_once('funcoes_produto.php');

#CADASTRO PRODUTO
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $array = array($nome, $descricao,$quantidade);
    $retorno= inserirProduto($conexao, $array);
    if($retorno){
        $_SESSION["msg"]= "Produto cadastrado com sucesso";

        header('location:../../listarProduto.php');
    }else{
        $_SESSION["msg"]= "Erro ao cadastrar produto";
        header('location:../../cadastrarProduto.php');
    }
}
#EDITAR PRODUTO
if(isset($_POST['editar'])){

$codproduto = $_POST['editar'];
$array = array($codpessoa);
$produto=buscarProduto($conexao, $array);
require_once('../../alterarProduto.php');
}
#DELETAR PRODUTO
if(isset($_POST['deletar'])){
$codproduto = $_POST['deletar'];
$array=array($codproduto);
deletarProduto($conexao, $array);

header('Location:../../listarProduto.php');
}
#PESQUISAR PRODUTO
if(isset($_POST['pesquisar'])){
$nome = $_POST['nome'];
$array=array("%".$nome."%");
$produtos=pesquisarProduto($conexao, $array);
require_once('../../mostrarProduto.php');
}
?>