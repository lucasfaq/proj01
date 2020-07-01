<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>Sistema-Consutar</title>

		<!-- css dos plugins -->
		<link rel="stylesheet" href="styles/plugins.css">
		
        <!-- css da pagina de login -->
		<link rel="stylesheet" href="styles/visuais/login.css">

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
				    <label class="checkbox-inline">
				        <input type="checkbox">
				        Lembrar-me
				    </label>
				    <a href="#">Recuperar Senha</a>
				</div>
			</form>
		</div>
		
	</body>
</html>