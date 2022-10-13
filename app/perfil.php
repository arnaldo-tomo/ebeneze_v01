<?php 
	require_once 'assets/php/header.php';
?>



  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
      		<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class=" mt-6 border-dark">
					<div class="card-header border-dark">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a href="#profile" class="nav-link active  font-weight-bold" data-toggle="tab">Perfil</a>
							</li>

							<li class="nav-item">
								<a href="#editProfile" class="nav-link  font-weight-bold" data-toggle="tab">Editar Pefil</a>
							</li>

							<li class="nav-item">
								<a href="#changePass" class="nav-link font-weight-bold" data-toggle="tab">Mudar Senha</a>
							</li>

						</ul>
					</div>

                        <div class="card-body">
						<div class="tab-content">
							<!--Profile Tab Content Start-->
							<div class="tab-pane container active" id="profile">
								<div id="verifyEmailAlert"></div>
								<div class="card-deck">
									
									<div class="card border-primary">
										<div class="card-header bg-primary text-light text-center lead">
											Usuario Numero : <?= $cid; ?>
										</div>
										<div class="card-border">
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>Nome : </b><?= $cname; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>E-mail : </b><?= $cemail; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>Genero : </b><?= $cgender; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>Data de nascimento : </b><?= $cdob; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>Telefone : </b><?= $cphone; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>Registado em : </b><?= $reg_on; ?></p>
											<p class="card-text p-2 m-1 rounded" style="border:1px solid #0275d8;"><b>E-mail  : </b><?= $verified; ?>

											<?php if($verified == 'Not verified!'): ?>
												<a href="#" id="verify-email" class="float-right">Verify Now</a>
											<?php endif; ?>
											</p>
											<div class="clearfix"></div>
										</div>
									</div>

									<div class="card border-primary align-self-center">
										<?php if(!$cphoto): ?>
											<img src="assets/php/img/avatar.png" class="img-thumnail img-fluid" width="408px">
											<?php else: ?>
												<img src="<?= 'assets/php/'.$cphoto; ?>" class="img-thumnail img-fluid" width="408px">
											<?php endif; ?>
									</div>

								</div>
							</div>
							<!--Profile Tab Content End-->

							<!--Edit Profile Tab Content Start-->
							<div class="tab-pane container fade" id="editProfile">
								<div class="card-deck">
									<div class="card border-danger align-self-center">
										<?php if(!$cphoto): ?>
											<img src="assets/php/img/avatar.png" class="img-thumnail img-fluid" width="408px">
											<?php else: ?>
												<img src="<?= 'assets/php/'.$cphoto; ?>" class="img-thumnail img-fluid" width="408px">
											<?php endif; ?>
									</div>
									<div class="card border-danger">
										<form action="" method="post" class="px-3 mt-2" enctype="multipart/form-data" id="profile-update-form">
											<input type="hidden" name="oldimage" value="<?= $cphoto; ?>" >
											<div class="form-group m-0">
												<label for="profilePhoto" class="m-1">Carregar imagen</label>
												<input type="file" name="foto_user" id="profilePhoto">
											</div>
											<div class="form-group m-0">
												<label for="name" class="m-1">Nome</label>
												<input type="text" name="name" id="name" class="form-control" value="<?= $cname;?>">
											</div>
											<div class="form-group m-0">
												<label for="gender" class="m-1">Genero</label>
												<select name="gender" id="gender" class="form-control">
													<option value="" disabled <?php if($cgender == null){echo 'selected';}?>>Escolher Genero</option>
													<option value="Male" <?php if($cgender == 'Male'){echo 'selected';}?>>Masculino</option>
													<option value="Female" <?php if($cgender == 'Female'){echo 'selected';}?>>Femenino</option>
												</select>
											</div>
											<div class="form-group m-0">
												<label for="dob" class="m-1">Data de nascimento</label>
												<input type="date" id="dob" name="dob" value="<?= $cdob; ?>" class="form-control">
											</div>
											<div class="form-group m-0">
												<label for="phone" class="m-1">tefelone</label>
												<input type="tel" id="phone" name="phone" value="<?= $cphone; ?>" class="form-control" placeholder="Phone" >
											</div>

											<div class="form-group mt-2">
												<input type="submit" name="profile_update" value="Update Profile" class="btn btn-danger btn-block" id="profileUpdateBtn">
											</div>

										</form>
									</div>
								</div>
							</div>
							<!--Edit Profile Tab Content End-->

							<!--Change Password Tab Content Start-->
							<div class="tab-pane container fade" id="changePass">

								<div id="changepassAlert"></div>

								<div class="card-deck">
									<div class="card border-success">
										<div class="card-header bg-primary text-light text-center  lead">
											Mudar Senha
										</div>
										<form action="#" method="post" class="px-3 mt-2" id="change-pass-form">
											<div class="form-group">
												<label for="curpass">Ensira a sua senha recente</label>
												<input type="password" name="curpass" placeholder="Ensira a sua senha recente" class="form-control form-control-lg" id="curpass" required minlength="5">
											</div>
											<div class="form-group">
												<label for="newpass">Ensira a sua nova senha</label>
												<input type="password" name="newpass" placeholder="Ensira a sua nova senha" class="form-control form-control-lg" id="newpass" required minlength="5">
											</div>
											<div class="form-group">
												<label for="cnewpass">confirmar novamente</label>
												<input type="password" name="cnewpass" placeholder="confirmar novamente" class="form-control form-control-lg" id="cnewpass" required minlength="5">
											</div>

											<div class="form-group">
												<p id="changepassError" class="text-danger"></p>
											</div>

											<div class="form-group">
												<input type="submit" name="changepass" value="Change Password" class="btn btn-primary btn-block btn-lg" id="changePassBtn">
											</div>
										</form>
									</div>
									<div class="card border-success align-self-center">
										<img src="assets/php/img/pass_change.jpg" class="img-thumnail img-fluid" width="408px">
									</div>
								</div>
							</div>
							<!--Change Password Tab Content End-->
						</div>
					</div>

                </div>
            </div>
                </div>
          </div>
        </div>
      </section>
</div>

          


<?php
	require_once 'assets/php/footer.php';
?>

  <!-- jQuery -->
<script src="assets/plugins/bootstrapjsmanual/js/jquery-3.5.1.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){

			//Profile Update Ajax Request
			$("#profile-update-form").submit(function(e){
				e.preventDefault();

				$.ajax({
					url: 'assets/php/process.php',
					method: 'post',
					processData: false,
					contentType: false,
					cache: false,
					data: new FormData(this),//send img details to the server
					success:function(response){
						//console.log(response);
						location.reload();
					}
				});
			});

            
         //change password ajax request
			$("#changePassBtn").click(function(e){
				if($("#change-pass-form")[0].checkValidity()){
					e.preventDefault();
					$("#changePassBtn").val('Please Wait..');

					if($("#newpass").val() != $("#cnewpass").val()){
						$("#changepassError").text('* Password did not matched!');
						$("#changePassBtn").val('Change Password');
					}
					else{
						$.ajax({
							url: 'assets/php/process.php',
							method: 'post',
							data: $("#change-pass-form").serialize()+'&action=change_pass',
							success:function(response){
								//console.log(response);
								$("#changepassAlert").html(response);
								$("#changePassBtn").val('Change Password');
								$("#changepassError").text('');
								$("#change-pass-form")[0].reset();
							}
						});
					}
				}
			});
   
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
});
        
        
        
        
        
</script>

