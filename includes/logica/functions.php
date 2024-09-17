<?php
 
    function inserirPessoa($conexao,$array){
       try {
            $query = $conexao->prepare("insert into pessoa (nome, email, cpf, senha) values (?, ?, ?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
    function inserirAdm($conexao,$array){
       try {
            $query = $conexao->prepare("insert into administradores (nome, email, senha,status, foto_perfil) values (?, ?, ?, ?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarPessoa($conexao, $array){
        try {
            $query = $conexao->prepare("update pessoa set nome= ?, email = ?, cpf= ?, senha= ? where codpessoa = ? and status=true");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function alterarAdmin($conexao, $array){
        try {
            $query = $conexao->prepare("update administradores set nome= ?, email = ?, senha= ?, foto_perfil where id=? and status=true");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function alterarPessoaPerfil($conexao, $array){
        try {
            session_start();
            $query = $conexao->prepare("update pessoa set nome= ?, email = ?, cpf= ?, senha= ? where codpessoa = ?");
            $resultado = $query->execute($array);   
            $_SESSION['nome']=$array[0];         
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



    function deletarPessoa($conexao, $array){
        try {
            $query = $conexao->prepare("delete from pessoa where codpessoa = ?");
            $resultado = $query->execute($array);   
             return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function deletarAdministrador($conexao, $array){
        try {
            $query = $conexao->prepare("delete from administradores where id = ?");
            $resultado = $query->execute($array);   
             return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarPessoa($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM pessoa where status=true");      
        $query->execute();
        $pessoas = $query->fetchAll();
        return $pessoas;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }
    function listarAdmin($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM administradores where status=true");      
        $query->execute();
        $administradores = $query->fetchAll();
        return $administradores;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarPessoa($conexao,$array){
        try {
        $query = $conexao->prepare("select * from pessoa where codpessoa=? and status=true");
        if($query->execute($array)){
            $pessoa = $query->fetch(); //coloca os dados num array $usuario
            return $pessoa;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
     function buscarAdmin($conexao,$array){
        try {
        $query = $conexao->prepare("select * from administradores where id=?");
        if($query->execute($array)){
            $administrador = $query->fetch(); //coloca os dados num array $usuario
            return $administrador;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    function acessarPessoa($conexao,$array,$senha_form){
        try {
        $query = $conexao->prepare("select * from pessoa where email=? and status=true");
        if($query->execute($array)){
            $pessoa = $query->fetch(); //coloca os dados num array $pessoa
        if(password_verify($senha_form, $pessoa['senha']))
            {  
                return $pessoa;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    function acessarAdm($conexao,$array,$senha_form){
    
        $query = $conexao->prepare("select * from administradores where email=? and status=true");
        if($query->execute($array)){
            $administrador = $query->fetch(); //coloca os dados num array $pessoa
        if(password_verify($senha_form, $administrador['senha']))
            { 
                return $administrador;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
    }

 function pesquisarPessoa($conexao,$array){
        try {
        $query = $conexao->prepare("select * from pessoa where nome like ? and status=true");
        if($query->execute($array)){
            $pessoas = $query->fetchAll(); //coloca os dados num array $pessoa
          if ($pessoas)
            {  
                return $pessoas;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

function pesquisarPessoaEmail($conexao,$array){
    
        try {

        $query = $conexao->prepare("select * from pessoa where md5(email) = ?");
        if($query->execute($array)){
            $pessoa = $query->fetch(); //coloca os dados num array $pessoa
          if ($pessoa)
            {  
                return $pessoa;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

 function alterarStatustrue($conexao, $array){
        try {
            session_start();
            $query = $conexao->prepare("update pessoa set status = true where codpessoa = ?");
            $resultado = $query->execute($array);       
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

 function perdeuSenha($conexao,$array){
    try {
        $query = $conexao->prepare("select * from pessoa where email=? and status=true");
        if($query->execute($array)){
            $pessoa = $query->fetch();
            if($pessoa)
            {
                return $pessoa;
            }
            else
            {
                return false;
            }
        }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
  function inserirRecuperacao($conexao,$array){
       try {
            $query = $conexao->prepare("insert into recuperacao (utilizador, confirmacao) values (?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
  
  
  function recuperarSenha($conexao,$array){
    try {
        $query = $conexao->prepare("select * from recuperacao where utilizador=? and confirmacao=?");
        if($query->execute($array)){
            $recuperacao = $query->fetch();
            if($recuperacao)
            {
                return $recuperacao;
            }
            else
            {
                return false;
            }
        }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    
    
    function deletarRecuperacao($conexao,$array){
    try {
        $query = $conexao->prepare("delete from recuperacao where utilizador=? and confirmacao=?");
        if($query->execute($array)){
       
                return true;
            }
            else
            {
                return false;
            }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
      function alterarSenha($conexao, $array){
        try {
            $query = $conexao->prepare("update pessoa set senha= ? where email = ? and status=true");
            $resultado = $query->execute($array);             
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function inserirProduto($conexao,$array){
        try {
             $query = $conexao->prepare("insert into produtos(nome, descricao, quantidade,idcategoria, imagem) values (?, ?, ?, ?, ?)");
 
             $resultado = $query->execute($array);
             var_dump($resultado);
             return $resultado;
         }catch(PDOException $e) {
             echo 'Error: ' . $e->getMessage();
         }
 
     }
 
     function listarProduto($conexao){
         try {
           $query = $conexao->prepare("SELECT * FROM produtos");      
           $query->execute();
           $produtos = $query->fetchAll();
           return $produtos;
         }catch(PDOException $e) {
               echo 'Error: ' . $e->getMessage();
         }  
   
       }
 
       function buscarProduto($conexao,$array){
         try {
         $query = $conexao->prepare("select * from produto where codproduto=?");
         if($query->execute($array)){
             $produto = $query->fetch(); //coloca os dados num array $usuario
             return $produto;
         }
         else{
             return false;
         }
          }catch(PDOException $e) {
             echo 'Error: ' . $e->getMessage();
       }  
     }
     function deletarProduto($conexao, $array){
         try {
             $query = $conexao->prepare("delete from produto where codproduto = ?");
             $resultado = $query->execute($array);   
              return $resultado;
         }catch(PDOException $e) {
             echo 'Error: ' . $e->getMessage();
         }
 
     }
     function pesquisarProduto($conexao,$array){
         try {
         $query = $conexao->prepare("select * from produto where nome like ?");
         if($query->execute($array)){
             $produtos = $query->fetchAll(); //coloca os dados num array $pessoa
           if ($produtos)
             {  
                 return $produtos;
             }
         else
             {
                 return false;
             }
         }
         else{
             return false;
         }
          }catch(PDOException $e) {
             echo 'Error: ' . $e->getMessage();
       }  
     }

     function inserirNoticia($conexao,$array){
        try {
            $query = $conexao->prepare("insert into noticias(titulo, conteudo,data_publicacao, fonte, categoria) values (?, ?, ?, ?, ?)");

            $resultado = $query->execute($array);
            var_dump($resultado);
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


     function listarNoticia($conexao){
            try{
                $query = $conexao->prepare("SELECT * FROM noticias");
                $query->execute();
                $noticias = $query->fetchAll();
                return $noticias;
            }catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }
     }

     function selecionaNoticia($query, $array){
        try{
            $query = $array->prepare("SELECT * FROM noticias WHERE titulo LIKE ?");
            if($query->execute($array)){
                $noticias = $query->fetch();
                if($noticias){
                    return $noticias;
                }else
                {
                    return false;
                }
            }
            else{
                return false;
            }
             }catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
          }  
        }

   ?>

