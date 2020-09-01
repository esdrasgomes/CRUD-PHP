
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de Controle</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link href="estilo/all.min.css" rel="stylesheet"> -->
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
					<a href="listar_categoria.php">Listar Categorias</a>
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
			<h2>Sistema de Estoque</h2><hr>
			<div class="row" style="margin-top: 40px">

			
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title">Cadastro de Produto</h4>
			        <p class="card-text">Adicione seus produtos no estoque.</p>
			        <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6" style="">
			    <div class="card" style="">
			      <div class="card-body">
			        <h4 class="card-title">Produtos Cadastrados</h4>
			        <p class="card-text">Visualizar, editar e excluir produtos cadastrados.</p>
			        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-6" style="margin-top: 40px">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title">Cadastro de  Categoria</h4>
			        <p class="card-text">Adicione as categorias dos produtos.</p>
			        <a href="cadastrar_categoria.php" class="btn btn-primary">Cadastrar</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6" style="margin-top: 40px">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title">Categorias Cadastradas</h4>
			        <p class="card-text">Visualizar, editar e excluir categorias cadastradas.</p>
			        <a href="listar_categoria.php" class="btn btn-primary">Categorias</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6" style="margin-top: 40px">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title">Cadastro de Fornecedor</h4>
			        <p class="card-text">Cadastre seus fornecedores</p>
			        <a href="cadastrar_fornecedor.php" class="btn btn-primary">Cadastrar</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6" style="margin-top: 40px">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title">Fornecedores Cadastrados</h4>
			        <p class="card-text">Visualizar, editar e excluir fornecedores cadastrados.</p>
			        <a href="listar_fornecedor.php" class="btn btn-primary">Fornecedores</a>
			      </div>
			    </div>
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
		<!-- <script src="js/main.js"></script> -->

	</body>
</html>