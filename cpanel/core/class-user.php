<?php

require_once('class-database.php');

class User extends Database{

	private $table_name;
	private $conn;
	public $id;
	public $name;
	public $username;
	public $password;
	public $email;
	public $role_id;
	public $status;
	public $created_at;
	public $updated_at;
	public $lastInsertId;
	public $error;
	public $rowCount;

	public function __construct(){
		$this->table_name = TBL_USER;
		$this->conn = parent::__construct();
	}

	public function insert(){
		try {
			$sql = 'INSERT INTO '.$this->table_name.' (id, name, username, password, email, role_id, status) VALUES (:id, :name, :username, :password, :email, :role_id, :status)';
			// echo $sql;
			$data = [':id'=>$this->id, ':name'=>$this->name, ':username'=>$this->username, ':password'=>$this->password, ':email'=>$this->email, ':role_id'=>$this->role_id, ':status'=>$this->status];		
			$q = $this->conn->prepare($sql);
			$result = $q->execute($data);
			$this->lastInsertId = $this->conn->lastInsertId();

			// Return True if success or False if failed
			return $result;
			
		} catch (Exception $e) {
			if(ALLOW_DEBUG){
				$this->error =  $e->getMessage();
			}else{
				$this->error = 'Error occured. Line No. '.__LINE__;
			}
			return false;
		}

	}

	public function updateById(){
		try {
			$sql = 'UPDATE '.$this->table_name.' SET name=:name, username=:username, email=:email, role_id=:role_id, status=:status WHERE id=:id';
			// echo $sql;
			$data = [':id'=>$this->id, ':name'=>$this->name, ':username'=>$this->username, ':email'=>$this->email, ':role_id'=>$this->role_id, ':status'=>$this->status];		
			$q = $this->conn->prepare($sql);
			$result = $q->execute($data);
			$this->rowCount = $q->rowCount();
			return $result;
			
		} catch (Exception $e) {
			if(ALLOW_DEBUG){
				$this->error =  $e->getMessage();
			}else{
				$this->error = 'Error occured. Line No. '.__LINE__;
			}
			return false;
		}

	}


	public function updatePassword(){
		$sql = 'UPDATE '.$this->table_name.' SET password=:password WHERE id=:id';
		// echo $sql;
		$data = [':id'=>$this->id, ':password'=>$this->password];		
		$q = $this->conn->prepare($sql);
		$q->execute($data);

	}

	public function selectAll(){
		$sql = 'SELECT * FROM '.$this->table_name;
		$q = $this->conn->prepare($sql);
		$q->execute();
		$result = $q->fetchAll();
		if(!empty($result)){
			return $result;
		}else{
			return false;
		}
	}

	public function selectById(){
		$sql = 'SELECT * FROM '.$this->table_name.' WHERE id=:id';
		$q = $this->conn->prepare($sql);
		$q->execute([':id'=>$this->id]);
		$result = $q->fetch();
		if(!empty($result)){
			return $result;
		}else{
			return false;
		}
	}

	public function checkCredential(){
		$sql = 'SELECT * FROM '.$this->table_name.' WHERE (username=:username OR email=:username) AND password=:password';
		$q = $this->conn->prepare($sql);
		$q->execute([':username'=>$this->username, ':password'=>$this->password]);
		$result = $q->fetch();
		if(!empty($result)){
			return $result;
		}else{
			return false;
		}

	}

	public function deleteById($id){
		try {
			$sql = 'DELETE FROM '.$this->table_name.' WHERE id=:id';
			$q = $this->conn->prepare($sql);
			$result = $q->execute([':id'=>$id]);
			$this->rowCount = $q->rowCount();
			return $result;
			
		} catch (Exception $e) {
			if(ALLOW_DEBUG){
				$this->error =  $e->getMessage();
				echo $this->error;
			}else{
				$this->error = 'Error occured. Line No. '.__LINE__;
			}
			return false;
		}

	}

	public function edit(){

		try {
			if($this->id === null){
				throw new Exception("Id is NULL", 1);
			}
			if($this->name === null){
				throw new Exception("Name is NULL", 1);
			}
			$sql = 'UPDATE '.$this->table_name.' SET name=:name, username=:username, email=:email, role_id=:role_id, status=:status WHERE id=:id';
		
			$params = [':id'=>$this->id, ':name'=>$this->name, ':username'=>$this->username, ':email'=>$this->email, ':role_id'=>$this->role_id, ':status'=>$this->status];		
			$q = $this->conn->prepare($sql);
			$result = $q->execute($params);
			$this->rowCount = $q->rowCount();
			return $result;

		} catch (Exception $e) {
			if(ALLOW_DEBUG){
				$this->error =  $e->getMessage();
				echo $this->error;
			}else{
				$this->error = 'Error occured. Line No. '.__LINE__;
			}
			return false;
		}

	}
	public function changePassword(){

		try {
			if($this->id === null){
				throw new Exception("Id is NULL", 1);
			}
			if($this->name === null){
				throw new Exception("Name is NULL", 1);
			}
			$sql = 'UPDATE '.$this->table_name.' SET password=:password WHERE id=:id';
		
			$params = [':id'=>$this->id, ':password'=>$this->password];		
			$q = $this->conn->prepare($sql);
			$result = $q->execute($params);
			$this->rowCount = $q->rowCount();
			return $result;

		} catch (Exception $e) {
			if(ALLOW_DEBUG){
				$this->error =  $e->getMessage();
				echo $this->error;
			}else{
				$this->error = 'Error occured. Line No. '.__LINE__;
			}
			return false;
		}

	}


}


?>