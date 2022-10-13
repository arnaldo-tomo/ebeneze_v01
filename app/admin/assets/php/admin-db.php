<?php
	require_once 'config.php';

	class Admin extends Database {
		//Admin Login
		public function admin_login($usuario,$senha){
			$sql = "SELECT usuario, senha FROM admin WHERE usuario = :usuario AND senha = :senha";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['usuario'=>$usuario, 'senha'=>$senha]);
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
	
        
        }
 
//Fetch All Registered Users
		public function fetchAllUsers($val){
			$sql = "SELECT * FROM funcionario WHERE apagar != $val";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $result;
	
        }
//add dados do funcionario no db
    	public function register($name,$email,$password)
		{
			$sql = "INSERT INTO funcionario (nome, email, senha) VALUES (:nome, :email, :senha)";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['nome'=>$name, 'email'=>$email, 'senha'=>$password]);
			return true;
		}
// fim add dados do funcionario no db

        
//vereficar email se esta registado
		//check if user already registered
		public function user_exist($email){
			$sql = "SELECT email FROM funcionario WHERE email = :email";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['email'=>$email]);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
// fim vereficar email se esta registado
        
        
//Fetch User's Details by ID
		public function fetchUserDetailsByID($id){
			$sql = "SELECT * FROM funcionario WHERE id_user = :id_user AND apagar != 0";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['id_user'=>$id]);

			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
//fim Fetch User's Details by ID
    
    
    
    //Delete An User
		public function userAction($id, $val){
			$sql = "UPDATE funcionario SET apagar = $val WHERE id_user = :id_user";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['id_user'=>$id]);

			return true;
		}
    
        //Delete An User
        
        public function insertPrecoViagem($partidaviagem,$destinoviagem,$valorviagem,$ano){
				$sql = "INSERT INTO preco_viagem (partidaviagem, destinoviagem, valorviagem, ano) VALUES (:partidaviagem, :destinoviagem, :valorviagem, :ano)";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(['partidaviagem'=>$partidaviagem, 'destinoviagem'=>$destinoviagem, 'valorviagem'=>$valorviagem, 'ano'=>$ano]);
				return true;
			}
	        
        
        
        
        
       //Fetch All Registered Users
		public function readPrecoViagem($val){
			$sql = "SELECT * FROM preco_viagem WHERE apagar != $val";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $result;
	
        } 
        

	//Edit Note of An User
		public function edit_note($id){
			$sql = "SELECT * FROM preco_viagem WHERE idprecoviagem = :idprecoviagem";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['idprecoviagem'=>$id]);

			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			return $result;
		}

    }



?>