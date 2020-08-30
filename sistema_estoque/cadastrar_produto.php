<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulário de Cadastro</title>
		<script src="https://kit.fontawesome.com/327cdc9af2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<style type="text/css">

			#tamanhoContainer {
				width: 600px;
			}
			#botao {
				font-weight: bold;
			}
			.container h3 {
				text-align: center;
			}
			form {
				margin-top: 40px;
			}

		</style>
	</head>
	<body>
	<?php

		session_start();

		$usuario = $_SESSION['usuario'];

		if(!isset($_SESSION['usuario'])) {
			header('Location: index.php');
		}

	?>
		
		 <div class="container" id="tamanhoContainer" style="margin-top: 40px; background-color: #ccc; padding: 30px 40px">
			
			<h4 style="text-align: center;">Formulário de Cadastro</h4><hr>
			<form action="inserir_produto.php" method="POST" style="margin-top: 30px">
			<div class="form-row">
				 <div class="form-group col-md-4">
				    <label>Código do Produto:</label>
				    <input type="number" class="form-control" name="nroproduto" placeholder="" autocomplete="off" required="">
				</div>
				<div class="form-group col-md-12">
				    <label>Descrição do Produto:</label>
				    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira a descrição do produto" autocomplete="off" required="">
				</div>
				
				<div class="form-group col-md-6">
				    <label>Quantidade:</label>
				    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required="">
				</div>
				<div class="form-group col-md-6">
			      <label>Preço:</label>
			      <input type="number" class="form-control" name="preco" placeholder="Insira o preço" autocomplete="off" required="">
			    </div>
				<div class="form-group col-md-5">
			    	<label>Categoria:</label>
				   	<select class="form-control" name="categoria" required="">

				   		<?php
				   		include 'conexao.php';
				   		$sql = "SELECT * FROM categoria order by nome_categoria ASC"; // "order by" deixa em ordem alfabética //
				   		$buscar = mysqli_query($conexao,$sql);

				   		while ($array = mysqli_fetch_array($buscar)) {
				   			$id_categoria = $array['id_categoria'];
				   			$nome_categoria = $array['nome_categoria'];
				   		?>

							<option><?php echo $nome_categoria ?></option>

						<?php } ?>

				    </select>
			 	</div>
				<div class="form-group col-md-7">
			    	<label>Fornecedor:</label>
				   	<select class="form-control" name="fornecedor">

				   		<?php
					   		include 'conexao.php';
					   		$sql2 = "SELECT * FROM fornecedor";
					   		$buscar2 = mysqli_query($conexao,$sql2);

					   		while ($array2 = mysqli_fetch_array($buscar2)) {
					   			$id_fornecedor = $array2['id_fornecedor'];
					   			$nome_fornecedor = $array2['nome_fornecedor'];
					   		?>

				      		<option><?php echo $nome_fornecedor ?></option>

				     	 <?php } ?>

				    </select>
			 	</div>
			 	
			</div><!--form-row-->

			<div style="text-align: right;">
					<a href="main.php" role="button" class="btn btn-info btn-sm" style="font-weight: bold;">Voltar!</a>

			 		<button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar!</button>
			 	</div>
			</form>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>