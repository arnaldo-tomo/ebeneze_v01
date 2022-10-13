<?php  

	require_once '../model/user.php';
	$db = new User();

 	//inicio: mostar dados na bases de dados

	if(isset($_POST['action']) && $_POST['action'] == "view"){
		$output = '';
		$data = $db->read();
		//print_r($data);
		if($db->totalRowCount()>0){
			$output .= '<table class="table table-striped table-sm table-bordered">
						<thead>
							<tr class="text-center">
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>E-mail</th>
								<th>Phone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>';
				foreach ($data as $row) {
					$output .= '<tr class="text-center text-secondary">
					<td>'.$row['id'].'</td>
					<td>'.$row['first_name'].'</td>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['phone'].'</td>
									<td>
										<a href="#" title="View Details" class="text-success infoBtn" id="'.$row['id'].'"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;

										<a href="#" title="Edit" class="text-primary editBtn" data-toggle="modal" data-target="#editModal" id="'.$row['id'].'"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;

										<a href="#" title="Delete" class="text-danger delBtn" id="'.$row['id'].'"><i class="fas fa-trash-alt fa-lg"></i></a>
									</td>
					</tr>
					';
				}

				$output .= '</tbody></table>';
				echo $output;
		}
		else{
			echo '<h3 class="text-cender text-secondary mt-5">:( No any user present in the database!)</h3>';
		}
	}

	//fim: mostar dados na bases de dados

	//inicio: inserir dados
	if(isset($_POST['action']) && $_POST['action'] == "insert"){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$db->insert($fname,$lname,$email,$phone);

	}
	//fim: inserir dados


	//inicio edit

	if(isset($_POST['edit_id'])){
		$id = $_POST['edit_id'];

		$row = $db->getUserById($id);
		echo json_encode($row);
	}

	if(isset($_POST['action']) && $_POST['action'] == "update"){
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$db->update($id,$fname,$lname,$email,$phone);
	}
	//fim edit

	//del
	if(isset($_POST['del_id'])){
		$id = $_POST['del_id'];

		$db->delete($id);
	}
	//en del

	//info user
	if(isset($_POST['info_id'])){
		$id = $_POST['info_id'];

		$row = $db->getUserById($id);
		echo json_encode($row);
	}
	//end info user

	//excel
	if(isset($_GET['export']) && $_GET['export'] == "excel"){
		header('Content-Type: application/vnd.ms-excel');
		//header("Content_Type: application/xls");
		header('Content-Disposition: attachment;filename="users.xls"');
		//header("Content-Disposition: attachment; filename=users.xls");
		//header('Cache-Control: max-age=0');
		//$writer->save('php://output');
		header('Pragma: no-cache');
		header("Expires: 0");

		$data = $db->read();
		echo '<table border="1">';
		echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Phone</th></tr>';
		foreach ($data as $row) {
			echo'<tr>
				<th>'.$row['id'].'</th>
				<th>'.$row['first_name'].'</th>
				<th>'.$row['last_name'].'</th>
				<th>'.$row['email'].'</th>
				<th>'.$row['phone'].'</th>
				</tr>';
		}
		echo '</table>';
	}
	//end excel

?>