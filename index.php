<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>Sistema-Consutar</title>

		<!-- css do bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
        <!-- css da pagina de login -->
		<link rel="stylesheet" href="styles/login.css">

		<!-- icone da aba de login -->
		<link rel="icon" href="imgs/favicon.png" type="image/x-icon">

	</head>
	<body>

		<div class="login-form">
			<form action="" method="post">
				<div class="logo">
					<img src="imgs/Icone.png" alt="">
				</div>
				<h2 class="text-center">
				    Sistema Consultar
				</h2>
				<div class="form-group">
                    <input class="form-control" type="email" name="usuario" placeholder="Insira Seu Email" required>
				</div>
				<div class="form-group">
                    <input class="form-control" type="password" name="senha" placeholder="Insira Sua Senha" required>
				</div>
				<div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn-login">Login</button>
				</div>
				<div class="clearfix">
				    <label class="float-left checkbox-inline">
				        <input type="checkbox">
				        Lembrar-me
				    </label>
				    <a href="#" class="float-right">Recuperar Senha</a>
				</div>
			</form>
		</div>
		
	</body>
</html>