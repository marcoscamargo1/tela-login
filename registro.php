<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
	<title>Cadastro</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.8.1-web/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark">
 <div class="container">
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Criar conta</div>
     <div class="card-body">
       <form>         
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-12">
               <label for="exampleInputName">Usuário</label>
               <input class="form-control" id="exampleInputName" type="text" name="username" required="">
             </div> <!--col-md-12-->
           </div> <!--form-row-->
         </div> <!--form-group-->
         <div class="form-group">
           <label for="exampleInputEmail1">Email</label>
           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" required="">
         </div> <!--form-group-->
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-6">
               <label for="exampleInputPassword1">Senha</label>
               <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" required="">
             </div> <!--col-md-6-->
            <div class="col-md-6">
               <label for="exampleInputPassword1">Confirme a senha</label>
               <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" required="" >
             </div> <!--col-md-6-->
           </div> <!--form-row-->
         </div> <!--form-group-->
          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Registrar</button>
       </form>
       <div class="text-center">
         <a class="d-block small mt-3" href="login.php">Login</a>       
       </div> <!--text-center-->
     </div> <!--card-body-->
   </div> <!--card card-register mx-auto mt-5-->
 </div> <!--container -->
	<script src="jquery/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
</body>
</html>