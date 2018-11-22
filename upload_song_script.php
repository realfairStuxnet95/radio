<?php
include 'class_loader.php';
//upload.php
$output="";
$table="audio_files";
$id_field="user_id";
$errorMsg="There was an error while Uploading song Please contact System admins";
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = 'uploads/' . $name;
 //check if other inputs submitted
 $title=$function->sanitize($_POST['song_name']);
 $description=$function->sanitize($_POST['song_name']);
 $category=$function->sanitize($_POST['category']);
 $user_id=$function->sanitize($_POST['user']);
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
	 //save song now
	$file_id=$artist->create_id($table,$id_field);
	$save_status=$songs->saveSong($file_id,$user_id,$title,$location,$category,$description);
	if($save_status){
		echo "200";
	}else{
		die(mysqli_error($con));
	}
 }else{
 	die(mysqli_error($con));
 }

}
?>