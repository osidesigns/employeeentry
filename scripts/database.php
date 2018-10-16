<?php
	class Database{
		private $dbHost = 'localhost';
		private $dbName = 'xyz_inc';
		private $dbUsername = 'root';
		private $dbPassword = '';
		public $conn;

		public function __construct(){
			try {
				
				$dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
				$this->conn = new PDO($dsn, $this->dbUsername, $this->dbPassword);
			} catch (PDOException $e) {
				
				if($e){
					echo 'There was a problem with the database connection';
				}
			}
		}
		public function getConnection(){
			return $this->conn;
		}
	}