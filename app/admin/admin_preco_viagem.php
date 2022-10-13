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
								<h4 class="mt-2 text-white">Preco de Viagem</h4>
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
				          <h4 class="modal-title">Adicionar</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body px-4">
						         <form action="#" method="POST" class="px-3" id="register-form">

									<div id="regAlert"></div>

									<div class="input-group input-group-lg form-group">
										<input type="text" name="partidaviagem" id="partidaviagem" class="form-control rounded-0" placeholder="Partida" required>
									</div>

									<div class="input-group input-group-lg form-group">
										<input type="text" name="destinoviagem" id="destinoviagem" class="form-control rounded-0" placeholder="Destino da viagem" required>
									</div> 	

									<div class="input-group input-group-lg form-group">
										<input type="number" name="valorviagem" id="valorviagem" class="form-control rounded-0" placeholder="Valor da viagem" required>
									</div>

									<div class="input-group input-group-lg form-group">
										<input type="number" min="2020" max="2025" step="1" maxlength="4"  value="2020" name="ano" id="ano" class="form-control rounded-0" placeholder="Ano" required>
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

	<!-- Stard Edit Note Modal-->
	<div class="modal fade" id="editNodeModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-info">
					<h4 class="modal-title text-light">Edit Note</h4>
					<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post" id="edit-note-form" class="px-3">
						<input type="hidden" name="eid" id="idprecoviagem">
			          	<div class="form-group">
			          		<input type="text" name="epartidaviagem" id="epartidaviagem" class="form-control"  required>
			          	</div>
			          	<div class="form-group">
			          		<input type="text" name="edestinoviagem" class="form-control" id="edestinoviagem" required>
			          	</div>
			          	<div class="form-group">
			          		<input type="text" name="evalorviagem" class="form-control" id="evalorviagem" required>
			          	</div>
			          	<div class="form-group">
			          		<input type="number" name="eano" class="form-control" id="eano" required>
			          	</div>
			          	<div class="form-group">
			          		<input type="submit" name="update" id="update" value="Update User" class="btn btn-primary btn-block">
			          	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Add New Note Modal-->
  
      </div>
    </section>
  </div>
                 
<?php
  require_once 'assets/php/footer.php'         
?>




<script src="plugins/bootstrapjsmanual/js/jquery-3.5.1.min.js"></script>
 <script src="plugins/bootstrapjsmanual/js/bootstrap.min.js"></script>             
<!-- jQuery -->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2/sweetalert2@8"></script>

<script type="text/javascript">


			$(document).ready(function(){


fetchAllUsers();
					//inicio: insert ajax request
					$("#register-btn").click(function(e){
						if($("#register-form")[0].checkValidity()){
							e.preventDefault();
							$.ajax({
								url: "assets/php/admin-action.php",
								type: "POST",
								data: $("#register-form").serialize()+"&action=insertPrecoViagem",
								success:function(response){
									Swal.fire({
										icon: 'success',
										title: 'User added successfully!',
										type: 'success'

									})
									$("#addModal").modal('hide');
									$("#register-form")[0].reset();
									fetchAllUsers();
								}
							});
						}
					});
					//fim: insert ajax request
             
                
                //Edit Note of An User Ajax Request
					$("body").on("click", ".editBtn", function(e){
						e.preventDefault();

						edit_id = $(this).attr('id');
						//console.log(edit_id);	

						$.ajax({
							url: 'assets/php/admin-action.php',
							method: 'POST',
							data: { edit_id: edit_id },
							success:function(response){
								data = JSON.parse(response);
								console.log(data);
								$('#eid').val(data.idprecoviagem);
								$('#epartidaviagem').val(data.partidaviagem);
								$("#edestinoviagem").val(data.destinoviagem);
								$("#evalorviagem").val(data.valorviagem);
								$("#eano").val(data.ano);
							}
						});
					});

                

					//fetch All User Ajax Request
					fetchAllUsers();

					function fetchAllUsers(){
						$.ajax({
							url: 'assets/php/admin-action.php',
							method: 'post',
							data: { action: 'fetchAllPrecoViagem' },
							success:function(response){
								//console.log(response);
								$("#showAllUsers").html(response);
								$("table").DataTable({
									order: [0, 'desc']
								});
							}
						});
					}
                
			});
</script>

</body>

</html>
