<?php

		/*$dsn = "localhost";//data source network
		$user = "root";
		$pass = "";
		$dbname = "php_oops_crud";


		try {
			$conn = new PDO("mysql:host=$dsn;dbname=$dbname", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}*/

        /*define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'php_oops_crud');

        try{
            $conn = new PDO('mysql:host=' . HOST . ';dbname=' .DBNAME, USER, PASS);
            echo "Sucesso";
        }catch(PDOException $e){
            echo $e->getMessage();
            echo "<br>";
            echo "<br>";
            echo "Erro";
        }*/


        class Db {
        	private $conn;
        	private $dsn = 'mysql:dbname=php_oops_crud;host=127.0.0.1';
        	private $user = 'root';
        	private $pw = '';

        	public function __construct() {
        		try {
        			$this->conn = new PDO($this->dsn, $this->user, $this->pw);
        		} catch (PDOException $e) {
        			print "Error!: " . $e->getMessage() . "";
        			die();
        		}
        		return $this->conn;
        	}

            public function getmyDB(){
                if($this->conn instanceof PDO){
                    return $this->conn;
                }
            }
        }


        
        

                
        
            



?>

