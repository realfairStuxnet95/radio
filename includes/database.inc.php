<?php 
$host="localhost";
$user="api_access";
$password="Stuxnet7268";
$dbname="radio";

$con=mysqli_connect($host,$user,$password);
if($con){
	$db=mysqli_select_db($con,$dbname);
}
?>