<?php
   require_once 'assets/php/head.php';
?>
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
		

		<div class="row">
			<div class="col-lg-12">
				<div class="card my-2 border-dark">
					<div class="card-header bg-dark text-white">
						<div class="row">
							<div class="col-lg-6">
								<h4 class="mt-2 text-white">Funcionario Activos</h4>
							</div>
							<div class="col-lg-6">
								<button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal">Adicionar</button>	
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="table-responsive" id="showAllUsers">
							<p class="text-center align-self-center lead">Please Wait...</p>
						</div>
					</div>
				</div>
			</div>
		</div>




		<!--Display User's in Details Modal-->
			<!-- Add New User Model-->
				 <!-- The Modal -->
			  <div class="modal fade" id="addModal">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				      	<!--Model Header-->
				        <div class="modal-header">
				          <h4 class="modal-title">Adicionar Funcionario</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body px-4">
						         <form action="#" method="POST" class="px-3" id="register-form">

									<div id="regAlert"></div>

									<div class="input-group input-group-lg form-group">
										<div class="input-group-prepend">
											<span class="input-group-text rounded-0">
												<i class="far fa-user fa-lg"></i>
											</span>
										</div>
										<input type="text" name="nome" id="nome" class="form-control rounded-0" placeholder="Nome Completo" required>
									</div>

									<div class="input-group input-group-lg form-group">
										<div class="input-group-prepend">
											<span class="input-group-text rounded-0">
												<i class="far fa-envelope fa-lg"></i>
											</span>
										</div>
										<input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="E-mail" required>
									</div>

									<div class="input-group input-group-lg form-group">
										<div class="input-group-prepend">
											<span class="input-group-text rounded-0">
												<i class="fas fa-key fa-lg"></i>
											</span>
										</div>
										<input type="password" name="senha" id="rsenha" class="form-control rounded-0" placeholder="Password" required minlength="5">
									</div>

									<div class="input-group input-group-lg form-group">
										<div class="input-group-prepend">
											<span class="input-group-text rounded-0">
												<i class="fas fa-key fa-lg"></i>
											</span>
										</div>
										<input type="password" name="csenha" id="csenha" class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">
									</div>

									<!-- show pass erro -->
									<div class="form-group">
										<div id="passError" class="text-danger font-weight-bold"></div>
									</div>
									<!-- show pass err o-->

									<div class="form-group">
										<input type="submit" value ="Adicionar" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
									</div>
								</form>
				        </div>
				      </div>
				    </div>
			  </div>
			  <!--Fim do Add New User Model-->




		 <!--Display User's in Details Modal-->
		<div class="modal fade" id="showUserDetailsModal">
			<div class="modal-dialog modal-dialog-centered mw-100 w-50">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="getName"></h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="card-deck">
							<div class="card border-primary">
								<div class="card-body">
									<p id="getEmail"></p>
									<p id="getPhone"></p>
									<p id="getPhone"></p>
									<p id="getDob"></p>
									<p id="getDob"></p>
									<p id="getGender"></p>
									<p id="getCreated"></p>
									<p id="getVerified"></p>
								</div>
							</div>
							<div class="card align-self-center" id="getImage"></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
            <!--   fim Display User's in Details Modal-->

	</div>
</section>
</div>


<?php
        require_once 'assets/php/footer.php'         
?>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script type="text/javascript">
	

	//fetch All User Ajax Request
			fetchAllUsers();

			function fetchAllUsers(){
				$.ajax({
					url: 'assets/php/admin-action.php',
					method: 'post',
					data: { action: 'fetchAllUsers' },
					success:function(response){
						//console.log(response);
						$("#showAllUsers").html(response);
						$("table").DataTable({
							order: [0, 'desc']
						});
					}
				});
			}


			 //Register Ajax Request start
			$("#register-btn").click(function(e){
				if ($("#register-form")[0].checkValidity()){
					e.preventDefault();
					$("#register-btn").val('Please Wait...');
					if($("#rsenha").val() != $("#csenha").val()){
						$("#passError").text('* Password did not mactched');
						$("#register-btn").val('Adicionar');
					}else{
						$("#passError").text("");
						$.ajax({
							url: "assets/php/admin-action.php",
							method: "POST",
							data: $("#register-form").serialize()+"&action=register",
							success:function(response){
								$("#register-btn").val('Adicionar');
								//console.log(response);
								if(response === 'register'){
									window.location = 'admin-funcionario.php';
								} 
								else{
									$("#regAlert").html(response);
								}
							}
						});
					}
				}
			});
               //End Register Ajax Request


				//Display User in Details Ajax Request
			$("body").on("click", ".userDetailsIcon", function(e){
				e.preventDefault();

				details_id = $(this).attr('id');

				$.ajax({
					url: 'assets/php/admin-action.php',
					type: 'post',
					data: { details_id: details_id },
					success:function(response){
						//console.log(response);
						data = JSON.parse(response);
						//console.log(data);
						$("#getName").text(data.nome+' '+'(ID: '+data.id_user+')');
						$("#getEmail").text('Email : '+data.email);
						$("#getPhone").text('Telefone : '+data.telefone);
						$("#getGender").text('Genero : '+data.genero);
						$("#getDob").text('Data de nascimento : '+data.data_nascimento);
						$("#getCreated").text('Criado em : '+data.criado_em);
						$("#getVerified").text('Verificado : '+data.verficado);

						if(data.foto != ''){
							$("#getImage").html('<img src="../assets/php/'+data.foto+'" class="img-thumbnail img-fluid align-self-center" width="280px">');
						}
						else{
							$("#getImage").html('<img src="../assets/php/img/avatar.png" class="img-thumbnail img-fluid align-self-center" width="280px">');
						}
					}
				});


				 //Delete An User Ajax Request
			$("body").on("click", ".deleteUserIcon", function(e){
				e.preventDefault();
				del_id = $(this).attr('id');

				Swal.fire({
					  title: 'Are you sure?',
					  text: "You won't be able to revert this!",
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
						 if (result.value) {
						$.ajax({
							url: 'assets/php/admin-action.php',
							method: 'post',
							data: {del_id: del_id},
							success:function(response){
								  Swal.fire(
								      'Deleted!',
								      'Note deleted!',
								      'success'
								    )
								  fetchAllUsers();
							}
						});
					 
					  }
					})
			});
            
                //Delete An User Ajax Request


			});


</script>

</div>
</body>