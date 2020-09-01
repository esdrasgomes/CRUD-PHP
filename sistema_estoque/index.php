<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<script src="https://kit.fontawesome.com/327cdc9af2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
		<style type="text/css">
			body {
				background-color: #333;
			}
			#tamanho {
				width: 100%;
				max-width: 400px;
				padding: 20px 3%;
				background-color: #efefef;
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%,-50%);
				-ms-transform: translate(-50%,-50%);
				box-shadow: 6px 6px 12px #111;
			}
			img {
				width: 150px;
				height: 150px;
			}
			label {
				font-weight: bold;
			}
			.botao {
				margin-top: 20px;
			}
			.senha {
				margin-top: 5px;
			}
		</style>
	</head>
	<body>

		<div class="container" id="tamanho">
			<center>
				<img src="imagens/cadeado.png">
			</center>
			<form action="index1.php" method="post">
				<div class="form-group">
					<label>E-mail:</label>
					<input type="text" name="usuario" class="form-control" placeholder="Digite seu e-mail" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label class="senha">Senha:</label>
					<input type="password" name="senha" class="form-control" placeholder="Digite sua senha" autocomplete="off" required="">
				</div>
				<div class="botao" style="text-align: right;">
					<button type="submit" class="btn btn-sm btn-info" style="font-weight: bold;">Entrar</button>
				</div>
			</form>
			
		</div>





		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

	</body>
</html>