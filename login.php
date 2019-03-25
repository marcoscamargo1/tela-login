<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.8.1-web/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form method="post" action="login.php">
					<div class="form-group">
						<label for="exampleInputEmail1">E-mail/Usuário</label>
						<input class="form-control" type="text" name="username" required="">
					</div> <!--form-group-->
					<div class="form-group">
						<label for="exampleInputPassword1">Senha</label>
						<input class="form-control" type="text" name="username" required="">
					</div> <!--form-group-->
					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox">Lembrar Senha
							</label>
						</div> <!--form-check"-->
					</div> <!--form-group-->
					<button type="submit" class="btn btn-primary btn-block" name="login_user">Logar</button>	
				</form>
				<div class="text-center">
					<a class="d-block small mt-3" href="registrar.php">Criar uma conta</a>
					<a class="d-block small" href="recup-senha.php">Esqueceu a senha?</a>
				</div> <!--text-center-->
			</div> <!--card-body-->
		</div> <!-- card card-login mx-auto mt-5 -->
	</div> <!--container-->
	<script src="jquery/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
</body>
</html>