<?php 
if(isset($_POST['email']) && isset($_POST['password'])){
	//load modules
	require '../class_loader.php';
	//clean submitted data
	$email=$function->sanitize($_POST['email']);
	$password=$function->sanitize($_POST['password']);
	//validate inputs by checking email
	if($function->isValidEmail($email)){
		$result=$artist->validateUser($email,$password);
		if($result){
			$session_data=array();
			$user_id="";
			$names="";
			$user_type=0;
			$session_data=$artist->sessionData($email,$password);
			foreach ($session_data as $key => $value) {
				$names=$value['names'];
				$user_id=$value['user_id'];
				$user_type=$value['type'];
			}
			session_start();
			$_SESSION['user_id']=$user_id;
			$_SESSION['names']=$names;
			$_SESSION['user_type']=$user_type;

			echo "200";
		}else{
			echo "That user do not exists";
		}
	}else{
		echo "Invalid email Provided";
	}
}else{
	echo "Please check submitted data";
}
?>