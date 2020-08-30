<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `preco`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,$preco,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px;margin-top: 20px">
	<center>
		<h4>Produto Adicionado com Sucesso!</h4>
		<div style="padding-top: 20px;">
			<a href="index.php" role="button" class="btn btn-primary">Cadastrar novo ítem</a>
		</div>
	</center>
</div>

