<?php

	include 'conexao.php';

	$fornecedor = $_POST['fornecedor'];

	$sql = "INSERT INTO fornecedor (nome_fornecedor) values ('$fornecedor')";
	$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 400px;margin-top: 20px;">
	<center>
		<h3>Fornecedor Cadastrado com Sucesso!</h3>
		<div style="margin-top: 40px">
			<a href="cadastrar_fornecedor.php" class="btn btn-primary">Voltar</a>
		</div>
	</center>
</div>