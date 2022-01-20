<?php  //listarclientes.php

include('conexao.php');
include "menu.php";

$sql = "select * from tblprodutos";
$qry = mysqli_query($con,$sql);

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Produtos</title>
  </head>
<body>
    
  <div class="container">
    <h1>Produtos cadastrados</h1>
    <hr>

    <a href="frmproduto.php" class="btn btn-primary btn-lg">Novo</a><br><br>
    <table class="table table-success table-striped table-hover">

     <?php

      echo "<tr>";
      echo "<td>Id</td>";
      echo "<td>Produto</td>";
      echo "<td>Preço</td>";
      echo "<td>Foto</td>";
      echo "<td colspan='2'>Ações</td>";

      echo "<tr>";
      while ($linha = mysqli_fetch_array($qry)){
      echo "<tr>";
      echo "<td>{$linha['idproduto']}</td>";
      echo "<td>{$linha['produto']}</td>";
      echo "<td>{$linha['preco']}</td>";
      echo "<td><img src='{$linha['foto']}' width='150px' height='130px'></td>";
      echo "<td ><a class='btn btn-warning'>Editar</a></td>";
      echo "<td><a class='btn btn-danger'>Excluir</a></td>";

      echo "<tr>";
      }
     ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>