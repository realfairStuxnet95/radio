<?php 
include_once 'Query.php';
class Subscriber extends Query{
	
	//function to check if user not already exists
	public function checkEmail($email){
		global $con;
		$query="SELECT email FROM Subscribers
				WHERE email=\"$email\"
				LIMIT 1";
		$status=false;
		$rows=$this->rows($con,$query);
		if($rows>0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	public function registerUser($user_id,$email,$password,$user_phone,$names){
		global $con;
		$password=md5($password);
		$query="INSERT INTO Subscribers(user_id,email,password,user_phone,names,status,type,isOnline)
				VALUES (\"$user_id\",\"$email\",\"$password\",\"$user_phone\",\"$names\",'ACTIVE',0,'no')";
		$status=$this->insert($con,$query);
		return $status;
	}

	//function to login a user
	public function validateUser($email,$password){
		global $con;
		$status=false;
		$password=md5($password);
		$query="SELECT * FROM Subscribers
				WHERE email=\"$email\" AND
				password=\"$password\"
				LIMIT 1";
		$result=array();
		$result=$this->select($con,$query);
		if(count($result)>0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	//session data
	public function sessionData($email,$password){
		global $con;
		$status=false;
		$password=md5($password);
		$query="SELECT * FROM Subscribers
				WHERE email=\"$email\" AND
				password=\"$password\"
				LIMIT 1";
		$result=array();
		$result=$this->select($con,$query);
		return $result;
	}
	public function create_id($table,$id_field){
		global $con;
		$result=array();
		$new_id=0;
		$query="SELECT ".$id_field." FROM ".$table." ORDER BY ".$id_field." DESC LIMIT 1";
		$result=$this->select($con,$query);
		foreach ($result as $key => $value) {
			$new_id=$value[$id_field];
		}
		$new_id=$new_id+1;
		return $new_id;
	}
}
$artist=new Subscriber();
?>