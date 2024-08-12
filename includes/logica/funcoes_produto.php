<?php
 
    function inserirProduto($conexao,$array){
       try {
            $query = $conexao->prepare("insert into produto (nome, descricao, quantidade) values (?, ?, ?)");

            $resultado = $query->execute($array);
            
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    function listarProduto($conexao){
        try {
          $query = $conexao->prepare("SELECT * FROM produto");      
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
?>