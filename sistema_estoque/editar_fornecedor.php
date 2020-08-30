<?php

include 'conexao.php';

$id = $_GET['id'];


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<title>Editar Fornecedor</title>
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
			<h4 style="text-align: center;">Editar Fornecedor</h4>
			<form action="atualizar_fornecedor.php" method="POST" style="margin-top: 30px">
				<?php

				$sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
				$buscar = mysqli_query($conexao,$sql);
				while ($array = mysqli_fetch_array($buscar)) {
					
					$id_fornecedor = $array['id_fornecedor'];
			    	$nomefornecedor = $array['nome_fornecedor'];

				?>
				
				<div class="form-group">
				    <label>Nome Categoria:</label>
				    <input type="text" class="form-control" name="nomefornecedor" value="<?php echo $nomefornecedor ?>" autocomplete="off">
				    <input type="text" class="form-control" name="id" value="<?php echo $id_fornecedor ?>" style="display: none;">
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