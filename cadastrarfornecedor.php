<?php
$conexao = mysqli_connect("localhost","root","","mercadodotoninho");
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cnpj = $_POST['cnpj'];

$sql_inserir = "insert into tabprodutos(nome,endereco,cnpj) values ('{$nome}','{$endereco}','{$cnpj})";

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>
