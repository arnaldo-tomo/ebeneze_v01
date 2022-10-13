<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrada de Frota</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-ligth navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
          
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      
       
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="#" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EBENEZER SERVIÇVOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    
          
          
       <li class="nav-item">
            <a href="saida.php" class="nav-link active">
              <i class="nav-icon "></i>
              <p>
                Entrada
              </p>
            </a>
          </li>
             
              <li class="nav-item">
                <a href="entrada.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Saida</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="estacao.php" class="nav-link">
               <i class="nav-icon far fa-circle text-info"></i>
                  <p>Estações de Combustível</p>
                </a>
              </li>
               <li class="nav-item">
                 <a href="caminhao.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Caminhã</p>
            </a>
              </li>
             <li class="nav-item">
                 <a href="trailler.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Trailler</p>
            </a>
              </li>
             <li class="nav-item">
                 <a href="motorista.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Motorista</p>
            </a>
              </li>
            
                
            </ul>
         
          </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
	<div class="container">
		

		<div class="row">
			<div class="col-lg-6">
                <b>	<h4 class="mt-2 text-primary">Entrada de Frota</h4></b>
			</div>
			<div class="col-lg-6">
				<button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-log"></i>&nbsp;&nbsp;Add New User</button>

				<a href="controller/action.php?export=excel" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg">&nbsp;&nbsp;</i>Exportar Para Excel</a>
				
			</div>
		</div>
		<hr class="my-1">

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive" id="showUser">
					
				</div>
			</div>
		</div>

	</div>
	<!--Fim conteudo-->


	<!--inicio formulario-->
	<!-- Add New User Model-->
	 <!-- The Modal -->
  <div class="modal fade" id="addModal">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      	<!--Model Header-->
	        <div class="modal-header">
	          <h4 class="modal-title">Add New User</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body px-4">
	          <form action="" method="POST" id="form-data">
	          	<div class="form-group">
	          		<input type="text" name="fname" class="form-control" placeholder="First Name" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="email" name="email" class="form-control" placeholder="E-mail" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="tel" name="phone" class="form-control" placeholder="Phone" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="submit" name="insert" id="insert" value="Add User" class="btn btn-danger btn-block">
	          	</div>
	          </form>
	        </div>
	      </div>
	    </div>
  </div>
  <!--Fim do Formulario-->
  

  <!--inicio update-->
	<!-- Add New User Model-->
	 <!-- The Modal -->
  <div class="modal fade" id="editModal">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      	<!--Model Header-->
	        <div class="modal-header">
	          <h4 class="modal-title">Edit User</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body px-4">
	          <form action="" method="POST" id="edit-form-data">
	          	<input type="hidden" name="id" id="id">
	          	<div class="form-group">
	          		<input type="text" name="fname" class="form-control" id="fname" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="text" name="lname" class="form-control" id="lname" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="email" name="email" class="form-control" id="email" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="tel" name="phone" class="form-control" id="phone" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="submit" name="update" id="update" value="Update User" class="btn btn-primary btn-block">
	          	</div>
	          </form>
	        </div>
	      </div>
	    </div>
  </div>
  <!--Fim do update-->
  

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script type="text/javascript">
		$(document).ready(function(){

		//mostrar todos usuarios da base de dado

		showAllUsers();

		function showAllUsers(){
			$.ajax({
				url: "controller/action.php",
				type: "POST",
				data: {action:"view"},
				success:function(response){
					//console.log(response);
					$("#showUser").html(response);
					$("table").DataTable({
						order: [0, 'desc']
					});
				}
			});
		}
		//fim : mostrar todos usuarios da base de dado

		//inicio: insert ajax request
		$("#insert").click(function(e){
			if($("#form-data")[0].checkValidity()){
				e.preventDefault();
				$.ajax({
					url: "controller/action.php",
					type: "POST",
					data: $("#form-data").serialize()+"&action=insert",
					success:function(response){
						Swal.fire({
							icon: 'success',
							title: 'User added successfully!',
							type: 'success'

						})
						$("#addModal").modal('hide');
						$("#form-data")[0].reset();
						showAllUsers();
					}
				});
			}
		});
		//fim: insert ajax request


			//inicio: update
			$("body").on("click", ".editBtn", function(e){
				e.preventDefault();
				edit_id = $(this).attr('id');
				$.ajax({
					url: "controller/action.php",
					type: "POST",
					data:{edit_id:edit_id},
					//data:'edit_id ='+edit_id, //por ver mais tarde
					success:function(response){
						//console.log(response);
						data = JSON.parse(response);
						//console.log(data);
						$("#id").val(data.id);
						$("#fname").val(data.first_name);
						$("#lname").val(data.last_name);
						$("#email").val(data.email);
						$("#phone").val(data.phone);
					}
				});
			});
			//fim: update

			//inicio: update ajax request
			$("#update").click(function(e){
				if($("#edit-form-data")[0].checkValidity()){
					e.preventDefault();
					$.ajax({
						url: "controller/action.php",
						type: "POST",
						data: $("#edit-form-data").serialize()+"&action=update",
						success:function(response){
							Swal.fire({
								icon: 'success',
								title: 'User updated successfully!',
								type: 'success'
							})
							$("#editModal").modal('hide');
							$("#edit-form-data")[0].reset();
							showAllUsers();
						}
					});
				}
			});
			//fim: update ajax request

			//delete
			$("body").on("click", ".delBtn", function(e){
				e.preventDefault();
				var tr = $(this).closest('tr');
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
				  if (result.isConfirmed) {
				  	$.ajax({
				  		url: "controller/action.php",
						type: "POST",
						data:{del_id:del_id},
						success:function(response){
							tr.css('background-color','#ff6666');
							Swal.fire(
								'Deleted!',
								'User deleted successfully',
								'success'
								)
								showAllUsers();
						}
				  	});
				  }
				});
			});
			//end delete

			//info user details

			$("body").on("click", ".infoBtn", function(e){
				e.preventDefault();
				info_id = $(this).attr('id');
				$.ajax({
						url: "controller/action.php",
						type: "POST",
						data:{info_id:info_id},
						success:function(response){
							//console.log(response);
							data = JSON.parse(response);
							Swal.fire({
								title:'<strong>User Info : ID('+data.id+')</strong>',
								type: 'info',
								html: '<b>First Name :</b>'+data.first_name+'<br><b>Last Name :</b>'+data.last_name+'<br><b>Email :</b>'+data.email+'<br><b>Phone :</b>'+data.phone,
								showCancelButton: true,
							})
						}
				});
			});

			//end info user details

		});
	</script>

  
     
           
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
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

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
