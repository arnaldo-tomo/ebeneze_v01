<?php 
	session_start();
	if(isset($_SESSION['user'])){
		header('location:funcionario.php');
	}

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
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" id="forgot-box">
 <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a  class="h1"><b>Ebenezer</b> Serviços</a>
    </div>
    <div class="card-body">
     

						<form action="#" method="POST" class="px-3" id="login-form" id="forgot-box">

							<div id="loginAlert"></div>
        <div class="input-group mb-3">
         <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-mail" required value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" id="senha" class="form-control rounded-0" placeholder="ensira a sua senha" required value="<?php if(isset($_COOKIE['senha'])) {echo $_COOKIE['senha']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="custom-control custom-checkbox float-left">
                  <input type="checkbox" name="rem" class="custom-control-input" id="customCheck" <?php if(isset($_COOKIE['email'])) { ?> checked <?php } ?>>
                  <label for="customCheck" class="custom-control-label">Remember me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button input type="submit" value ="Sing In" id="login-btn"  class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="pg/Esqueci-senha.html" class="btn btn-block btn-danger">
          <i class="fas fa-envelope mr-2"></i> Esqueci a minha senha
        </a>
               
      </div>
      <!-- /.social-auth-links -->
    










## Oiii eu sou a Arnaldo Tomo, Desenvolvedor web!
<div align="center">
  <a href="https://github.com/arnaldo-tomo">
  <img height="180em" src="https://github-readme-stats.vercel.app/api?username=rafaballerini&show_icons=true&theme=dracula&include_all_commits=true&count_private=true"/>
  <img height="180em" src="https://github-readme-stats.vercel.app/api/top-langs/?username=rafaballerini&layout=compact&langs_count=7&theme=dracula"/>
</div>
<div style="display: inline_block"><br>
  <img align="center" alt="Rafa-Js" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
  <img align="center" alt="Rafa-Ts" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-plain.svg">
  <img align="center" alt="Rafa-React" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
  <img align="center" alt="Rafa-HTML" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
  <img align="center" alt="Rafa-CSS" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
  <img align="center" alt="Rafa-Python" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg">
  <img align="center" alt="Rafa-Csharp" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/csharp/csharp-original.svg">
</div>
  
  ##
 
<div> 
  <a href="https://www.youtube.com/channel/UC_-uuuZbY0AAt9CViNzvc-Q" target="_blank"><img src="https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white" target="_blank"></a>
  <a href="https://instagram.com/rafaballerini" target="_blank"><img src="https://img.shields.io/badge/-Instagram-%23E4405F?style=for-the-badge&logo=instagram&logoColor=white" target="_blank"></a>
  <a href="https://www.twitch.tv/rafaballerinii" target="_blank"><img src="https://img.shields.io/badge/Twitch-9146FF?style=for-the-badge&logo=twitch&logoColor=white" target="_blank"></a>
 <a href="https://discord.gg/wagxzStdcR" target="_blank"><img src="https://img.shields.io/badge/Discord-7289DA?style=for-the-badge&logo=discord&logoColor=white" target="_blank"></a> 
  <a href = "mailto:contatorafaballerini@gmail.com"><img src="https://img.shields.io/badge/-Gmail-%23333?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
  <a href="https://www.linkedin.com/in/rafaella-ballerini-45875016a" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a> 
 
  ![Snake animation](https://github.com/rafaballerini/rafaballerini/blob/output/github-contribution-grid-snake.svg)
 
</div>



    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="js/all.min.js"></script>

<!-- jQuery -->
    
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>



<script>


		
	$(document).ready(function(){

			//login Ajax Request
			$("#login-btn").click(function(e){
				if($("#login-form")[0].checkValidity()){
					e.preventDefault();
					$("#login-btn").val('aguarde...');
					$.ajax({
						url: "assets/php/action.php",
						method: "POST",
						data: $("#login-form").serialize()+"&action=login",
						success:function(response){
							//console.log(response);
							$("#login-btn").val('Sign In');
							if(response === 'login'){
								window.location = 'funcionario.php';
							}
							else{
								$("#loginAlert").html(response);
							}
						}
					});
				}
			});

		});


</script>
