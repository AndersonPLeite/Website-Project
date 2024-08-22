<?php
include("includes/logica/conecta.php");
$nome = "%".$_POST['search']."%";
try {
  $stmt = $conn->prepare("SELECT * FROM categorias WHERE nome LIKE :nome");
  $stmt->bindParam(":nome",$nome);
  $stmt->execute();

  echo "<table>";
  echo "<tr><th>Id</th><th>Nome</th><th>Descricao</th><th>Quantidade</th><th>/th></tr>";

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $stmt1 = $conn->prepare("SELECT * FROM categorias WHERE idcategoria = :id");
  $stmt1->bindParam(":id",$row['idcategoria']);
  $stmt1->execute();
  echo "<th><th>Categoria</th></th>{$row_categoria['nome']};</th><th></th><th></th><th></th><?/tr>";
  $stmt2 =$conn->prepare("SELECT * FROM produtos WHERE idcategoria = :id");
  $stmt2->bindParam(":id",$row_categoria['idcategoria']);
  $stnt2->execute();
  while ($produtos = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>{produtos['idproduto']}</td><td>{$produtos['nome']}</td><td>{$produtos['descricao']}</td><td>{$produtos['quantidade']}</td><td></td></tr>";
    }
  }

  echo "</table><br><a href=index.html>Voltar<a/>";

} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}
?>
