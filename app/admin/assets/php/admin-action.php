<?php  

	require_once 'admin-db.php';
	$admin = new Admin();

	session_start();

	//handle Admin Login Ajax Request
	if(isset($_POST['action']) && $_POST['action'] == 'adminLogin'){
		//print_r($_POST);
		$username = $admin->test_input($_POST['usuario']);
		$password = $admin->test_input($_POST['senha']);

		$hpassword = sha1($password);

		$loggetInAdmin = $admin->admin_login($username,$hpassword);

		if($loggetInAdmin != null){
			echo 'admin_login';
			$_SESSION['usuario'] = $username;
		}
		else{
			echo $admin->showMessage('danger','Username or Password is Incorrect!');
		}
	
    }



//handle Fetch All User Ajax Request
	if(isset($_POST['action']) && $_POST['action'] == 'fetchAllUsers'){
		$output = '';
		$data = $admin->fetchAllUsers(0);
		$path = '../../assets/php/';//path for img

		if($data){
		$output .= '<table class="table table-striped table-bordered text-center">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>
								<th>Nome</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Genero</th>
								<th>Verificado</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>';
				foreach ($data as $row) {
					if($row['foto'] != ''){
						$uphoto = $path.$row['foto'];
					}
					else{
						$uphoto = '../../assets/php/img/avatar.png';
					}
					$output .= '<tr>
									<td>'.$row['id_user'].'</td>
									<td><img src="'.$uphoto.'" class="rounded-circle" width="40px"></td>
									<td>'.$row['nome'].'</td>
									<td>'.$row['email'].'</td>
									<td>'.$row['telefone'].'</td>
									<td>'.$row['genero'].'</td>
									<td>'.$row['verficado'].'</td>
									<td>
										<a href="#" id="'.$row['id_user'].'" title="View Details" class="text-primary userDetailsIcon" data-toggle="modal" data-target="#showUserDetailsModal"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;

										<a href="#" id="'.$row['id_user'].'" title="Delete User" class="text-danger deleteUserIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
									</td>
								</tr>';
				}
				$output .= '</tbody>
					</table>';
				echo $output;
		}
		else{
		echo '<h3 class="text-center text-secondary">:( no any user registered!</h3>';
		}
	}

//Handle Register Ajax Request Start
	if(isset($_POST['action']) && $_POST['action'] == 'register'){
		//print_r($_POST);
		$name = $admin->test_input($_POST['nome']);
		$email = $admin->test_input($_POST['email']);
		$pass = $admin->test_input($_POST['senha']);

		$hpass = password_hash($pass, PASSWORD_DEFAULT);

		if($admin->user_exist($email)){
			echo $admin->showMessage('warning','This E-mail is already registered!');
		} 
		else{
			if($admin->register($name,$email,$hpass)){
				echo 'register';
				//$_SESSION["user"] = $email;
			} 
			else{
				echo $admin->showMessage('danger','Something went wrong! try again later!');
			}
		}
	}

	//Handle Register Ajax Request End


//Handle Display User In Details Ajax Request
	if(isset($_POST['details_id'])){
		$id = $_POST['details_id'];

		$data = $admin->fetchUserDetailsByID($id);

		echo json_encode($data);
	}
//Handle Display User In Details Ajax Request


//Handle Delete an User AJAX Rquest
	if(isset($_POST['del_id'])){
		$id = $_POST['del_id'];
		$admin->userAction($id, 0);
	}
// fim Handle Delete an User AJAX Rquest

//Handle Fetch All Deleted Users Ajax Resquest
	if(isset($_POST['action']) && $_POST['action'] == 'fetchAllDeletedUsers'){
		$output = '';
		$data = $admin->fetchAllUsers(1);
		$path = '../assets/php/';//path for img

		if($data){
		$output .= '<table class="table table-striped table-bordered text-center">
						<thead>
							<tr>
								<th>#</th>
								<th>Foto</th>
								<th>Name</th>
								<th>E-mail</th>
								<th>Tel</th>
								<th>Genero</th>
								<th>Verificado</th>
								<th>Accao</th>
							</tr>
						</thead>
						<tbody>';
				foreach ($data as $row) {
					if($row['foto'] != ''){
						$uphoto = $path.$row['foto'];
					}
					else{
						$uphoto = '../../assets/php/img/avatar.png';
					}
					$output .= '<tr>
									<td>'.$row['id_user'].'</td>
									<td><img src="'.$uphoto.'" class="rounded-circle" width="40px"></td>
									<td>'.$row['nome'].'</td>
									<td>'.$row['email'].'</td>
									<td>'.$row['telefone'].'</td>
									<td>'.$row['genero'].'</td>
									<td>'.$row['verficado'].'</td>
									<td>

										<a href="#" id="'.$row['id_user'].'" title="Restore User" class="text-white restoreUserIcon badge badge-dark p-2">Restore</a>
									</td>
								</tr>';
				}
				$output .= '</tbody>
					</table>';
				echo $output;
		}
		else{
		echo '<h3 class="text-center text-secondary">:( no any user deleted!</h3>';
		}
	}


    	//Handle Retore Deleted User Ajax Request
        if(isset($_POST['res_id'])){
            $id = $_POST['res_id'];

            $admin->userAction($id, 1);
        }


        //inicio: inserir dados
	if(isset($_POST['action']) && $_POST['action'] == "insertPrecoViagem"){
		$partidaviagem = $_POST['partidaviagem'];
		$destinoviagem = $_POST['destinoviagem'];
		$valorviagem = $_POST['valorviagem'];
		$ano = $_POST['ano'];

		$admin->insertPrecoViagem($partidaviagem,$destinoviagem,$valorviagem,$ano);

	}
	//fim: inserir dados



//handle Fetch All User Ajax Request
	if(isset($_POST['action']) && $_POST['action'] == 'fetchAllPrecoViagem'){
		$output = '';
		$data = $admin->readPrecoViagem(0);
		//$path = '../../assets/php/';//path for img

		if($data){
		$output .= '<table class="table table-striped table-bordered text-center">
						<thead>
							<tr>
								<th>#</th>
								<th>Partida</th>
								<th>Destino</th>
								<th>Valor</th>
								<th>Ano</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>';
				foreach ($data as $row) {
					$output .= '<tr>
									<td>'.$row['idprecoviagem'].'</td>
									<td>'.$row['partidaviagem'].'</td>
									<td>'.$row['destinoviagem'].'</td>
									<td>'.$row['valorviagem'].'</td>
									<td>'.$row['ano'].'</td>
									<td>
										
										<a href="#" id="'.$row['idprecoviagem'].'" title="Edit Note" class="text-primary editBtn"><i class="fas fa-edit fa-lg" data-toggle="modal" data-target="#editNodeModal"></i></a>&nbsp;

										<a href="#" id="'.$row['idprecoviagem'].'" title="Delete User" class="text-danger deleteUserIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
									</td>
								</tr>';
				}
				$output .= '</tbody>
					</table>';
				echo $output;
		}
		else{
		echo '<h3 class="text-center text-secondary">:( no any user registered!</h3>';
		}
	}



	//Handle Edit Note of An User Ajax
		if(isset($_POST['edit_id'])){
			//print_r($_POST);
			$id = $_POST['edit_id'];

			$row = $admin->edit_note($id);
			echo json_encode($row);

		}

?>