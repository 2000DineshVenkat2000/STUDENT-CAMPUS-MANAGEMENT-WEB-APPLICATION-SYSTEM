<?php

session_start();
require('database_access.php');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase

//mysqli_select_db($con,'login');

$user_id = $_POST['user_id'];
$password = $_POST['password'];
$mail_id = $_POST['mail_id'];
//require_once('database_access.php');
//$s = "select * from login where user_id = '$user_id' && mail_id= '$mail_id' && password = '$password'";
$sql=" SELECT * FROM login WHERE user_id = '$user_id' AND mail_id = '$mail_id' AND password = '$password' ";
 
//echo $sql;
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['user_id'] = $user_id;
	$_SESSION['mail_id'] = $mail_id;
    header('location:index.php');
	
}
else {
	header('location:makeup/settingup.php');	  
	 
}

?>