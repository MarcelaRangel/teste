<!DOCTYPE html>
<<html lang="pt-br">>
<head>
<meta charset="utf-8">

</head>
  <body>
  <?php
include 'resources/head.php';
?>
<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=bancoteste", "root", ""); 
?>

  <center>
  <?php
    <h1>Adicionar Produto</h1>
 $nome = $_POST['nome'];
 $preço = $_POST['preço'];
 $qntd = $_POST['qntd'];
	</center>
	<?php
include 'resources/footer.php';
?>
  </body>
</html>