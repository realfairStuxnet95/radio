<?php 
if(isset($_POST['names']) && isset($_POST['email']) && isset($_POST['password'])){
	//load modules
	require '../class_loader.php';
	//clean submitted data
	$names=$function->sanitize($_POST['names']);
	$email=$function->sanitize($_POST['email']);
	$password=$function->sanitize($_POST['password']);
	$user_phone=$function->sanitize($_POST['phone']);
	$table="Subscribers";
	$id_field="user_id";
	//validate inputs by checking email
	if($function->validate_phone($user_phone)){
		if($function->isValidEmail($email)){
			//check if email not exist
			$check_email=$artist->checkEmail($email);
			if(!$check_email){
				//save record
				$user_id=$artist->create_id($table,$id_field);
				$save_status=$artist->registerUser($user_id,$email,$password,$user_phone,$names);
				if($save_status){
					//create user session
					session_start();
					$_SESSION['user_id']=$user_id;
					$_SESSION['names']=$names;
					$_SESSION['user_type']=0;

					echo "200";
				}else{
					echo "403";
				}
			}else{
				echo "That email already exist";
			}

		}else{
			echo "Invalid email Provided";
		}
	}else{
		echo "Please enter valid phone Format is: +2507XXXXXXXX";
	}
}else{
	echo "Please check submitted data";
}
?>