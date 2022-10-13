<?php

	session_start();
	if(isset($_SESSION['usuario'])){
		header('location:admin_home.php');
		exit();
	}

	include_once 'assets/php/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - EBENEZER SERVIÇOS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Admin</b> </a>
  </div>
   
  <!-- /.login-logo -->
    
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ensira as suas credencias</p>
    <form action="" method="post" class="px-3" id="admin-login-form">
	<div id="adminLoginAlert"></div>
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control form-control-lg rounded-0" placeholder="usuario" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <input type="password" name="senha" class="form-control form-control-lg rounded-0" placeholder="usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submint" name="admin-login" value="Login" id="adminLoginBtn"  class="btn btn-primary btn-block">Entrar</button>
          </div>
        
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
    
	</body>
</html>

<!--  INICIO login do admin -->
<script type="text/javascript">
		$(document).ready(function(){
			
			$("#adminLoginBtn").click(function(e){
				if($("#admin-login-form")[0].checkValidity()){
					e.preventDefault();

					$(this).val('Aguarde...');
					$.ajax({
						url: 'assets/php/admin-action.php',
						method: 'post',
						data: $("#admin-login-form").serialize()+'&action=adminLogin',
						success:function(response){
							//console.log(response);
							if(response === 'admin_login'){
								window.location = 'admin_home.php';
							}
							else{
								$("#adminLoginAlert").html(response);
							}
							$("#adminLoginBtn").val('Login');
						}
					});
				}
			});
		});
	</script>
<!-- FIM  login do admin -->