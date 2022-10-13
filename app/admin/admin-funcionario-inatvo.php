<?php
    require_once 'assets/php/head.php'
?>


<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
<div class="row">
			<div class="col-lg-12">
				<div class="card my-2 border-dark">
					<div class="card-header bg-dark text-white">
						<h4 class="m-0">Total Deleted User</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive" id="showAllDeletedUsers">
							<p class="text-center align-self-center lead">Please Wait...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script type="text/javascript">
		$(document).ready(function(){
			
			//fetch All Deleted User Ajax Request
			fetchAllDeletedUsers();

			function fetchAllDeletedUsers(){
				$.ajax({
					url: 'assets/php/admin-action.php',
					method: 'post',
					data: { action: 'fetchAllDeletedUsers' },
					success:function(response){
						//console.log(response);
						$("#showAllDeletedUsers").html(response);
						$("table").DataTable({
							order: [0, 'desc']
						});
					}
				});
			}



			//Restore Deleted User Ajax Request
			$("body").on("click", ".restoreUserIcon", function(e){
				e.preventDefault();
				res_id = $(this).attr('id');

				Swal.fire({
					  title: 'Are you sure want restore this user?',
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Yes, restore it!'
					}).then((result) => {
						 if (result.value) {
						$.ajax({
							url: 'assets/php/admin-action.php',
							method: 'post',
							data: {res_id: res_id},
							success:function(response){
								  Swal.fire(
								      'Restore!',
								      'User Restored deleted!',
								      'success'
								    )
								  fetchAllDeletedUsers();
							}
						});
					 
					  }
					})
			});

		});
	</script>



