<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fornecedores Cadastrados</title>
		<script src="https://kit.fontawesome.com/327cdc9af2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
	<?php

	session_start();

	$usuario = $_SESSION['usuario'];

	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	?>

		














		<div class="menu">
			<div class="menu-wraper">
				<div class="box-usuario">
					<!-- <div class="avatar-usuario">
						<i class="fa fa-user"></i>
					</div>avatar-usuario -->
					<div class="imagem-usuario">
						<img src="imagens/perfil.jpg"/>
					</div><!--imagem-usuario-->
				<div class="nome-usuario">
					<h6>Esdras Gomes</h6>
					<p>Administrador</p>
				</div><!--nome-usuario-->
				</div><!--box-usuario-->
				<div class="itens-menu">
					<h2>Estoque</h2>
					<a href="cadastrar_produto.php">Cadastrar Produtos</a>
					<a href="listar_produtos.php">Listar Produtos</a>
					<h2>Fornecedores</h2>
					<a href="cadastrar_fornecedor.php">Cadastrar Fornecedores</a>
					<a href="listar_fornecedor.php">Listar Fornecedores</a>
					<h2>Categorias</h2>
					<a href="cadastrar_categoria.php">Cadastrar Categorias</a>
					<a href="listar_categoria.php">Editar Categorias</a>
					<h2>Dados do Estoque</h2>
					<a href="">Valor do estoque</a>
					<a href="">Relatórios</a>
				</div><!--itens-menu-->
			</div><!--menu-wraper-->
		</div><!--menu-->

		<header>
			<div class="center">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!--menu-btn-->
				
			<div class="loggout">
				<a href=""> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
				<a href="index.php"><i class="fas fa-sign-out-alt"> </i><span>Sair</span></a>
			</div><!--loggout-->

				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</header>

		<div class="content">

		<div class="container" style="margin-top: 10px; text-align:center;">
			<h2>Fornecedores Cadastrados</h2><hr>
			<div class="row" style="margin-top: 10px">

			
			<div class="container" style="margin-top: 10px;">
			<!-- <div style="text-align: right;">
				<a href="main.php" role="button" class="btn btn-info btn-sm" style="font-weight: bold;">Voltar!</a>
			</div> -->
			<!-- <h3>Fornecedores Cadastrados</h3> -->
			<br>
			<table class="table table-hover">
			  	<thead>
				    <tr>
				    	<th scope="col">Nome Fornecedor</th>
						<th scope="col">Ação</th>
				    </tr>
			  	</thead>

			    	<!-- Buscando informações do banco de dados para inserir na tabela -->
			    	<?php

			    		include 'conexao.php';
			    		$sql = "SELECT * FROM `fornecedor`";
			    		$busca = mysqli_query($conexao,$sql);

			    		while ($array = mysqli_fetch_array($busca)) {

			    			$id_fornecedor = $array['id_fornecedor'];
			    			$nomefornecedor = $array['nome_fornecedor'];
			    	?>

			    	<tr>
				      	<td><?php echo $nomefornecedor ?></td>
				      	

				      	<td><a class="btn btn-success btn-sm" href="editar_fornecedor.php?id=<?php echo $id_fornecedor ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

				      		<a class="btn btn-danger btn-sm" href="excluir_fornecedor.php?id=<?php echo $id_fornecedor ?>" role="button"><i class="fas fa-trash-alt"></i></i>&nbsp;Excluir</a>
				      	</td>

			    	</tr>

			    	<?php } ?>

			</table>

		</div>


			</div><!--row-->

		</div> <!--container-->
			

		</div><!--content-->


















		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script  src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
		<script src="../js/main.js"></script>
	</body>
</html>