<?php

include 'conexao.php';

$id = $_GET['id'];


?>
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
				width: 500px;
			}
			#botao {
				font-weight: bold;
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
		
		<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
			<h4 style="text-align: center;">Formulário de Cadastro</h4>
			<form action="atualizar_produto.php" method="POST" style="margin-top: 30px">
				<?php

				$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
				$buscar = mysqli_query($conexao,$sql);
				while ($array = mysqli_fetch_array($buscar)) {
					
					$id_estoque = $array['id_estoque'];
			    	$nroproduto = $array['nroproduto'];
					$nomeproduto = $array['nomeproduto'];
				   	$quantidade = $array['quantidade'];
				   	$preco = $array['preco'];
			    	$categoria = $array['categoria'];
		  			$fornecedor = $array['fornecedor'];

				?>
				 <div class="form-group">
				    <label>Código do Produto:</label>
				    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
				    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
				</div>
				<div class="form-group">
				    <label>Descrição do Produto:</label>
				    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" autocomplete="off">
				</div>
				<div class="form-group">
			    	<label>Categoria:</label>
				   	<select class="form-control" name="categoria">

				   		<?php
					   		// include 'conexao.php';
					   		$sql2 = "SELECT * FROM categoria";
					   		$buscar2 = mysqli_query($conexao,$sql2);

					   		while ($array2 = mysqli_fetch_array($buscar2)) {
					   			$id_categoria = $array2['id_categoria'];
					   			$nome_categoria = $array2['nome_categoria'];
					   		?>

				      		<option><?php echo $nome_categoria ?></option>
				     	 <?php } ?>

				    </select>
			 	</div>
				<div class="form-group">
				    <label>Quantidade:</label>
				    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
				</div>
				<div class="form-group">
				    <label>Preço:</label>
				    <input type="number" class="form-control" name="preco" autocomplete="off" value="<?php echo $preco ?>">
				</div>
				<div class="form-group">
			    	<label>Fornecedor:</label>
				   	<select class="form-control" name="fornecedor">

				   		<?php
					   		// include 'conexao.php';
					   		$sql3 = "SELECT * FROM fornecedor";
					   		$buscar3 = mysqli_query($conexao,$sql3);

					   		while ($array3 = mysqli_fetch_array($buscar3)) {
					   			$id_fornecedor = $array3['id_fornecedor'];
					   			$nome_fornecedor = $array3['nome_fornecedor'];
					   		?>

				      		<option><?php echo $nome_fornecedor ?></option>
				     	 <?php } ?>

				    </select>
			 	</div>
			 	<div style="text-align: right;">
			 		<button type="submit" id="botao" class="btn btn-success btn-sm">Atualizar!</button>
			 	</div>
			 <?php } ?>
			</form>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>