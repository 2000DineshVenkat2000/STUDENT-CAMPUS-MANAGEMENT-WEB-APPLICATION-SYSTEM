<?php

session_start();
//require('database_access.php');
//include('lostorfoundmailer.php');
 

//$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase
//mysqli_select_db($con,'login');
$msg="";
$to="bharathkuppu@gmail.com";
$d = $_POST['d']; 
$headers = "From Cleanliness Management Team";
$b = $_POST['b'];	
echo $d;
$c= $_POST['c'];
//$p= $_POST['p'];		
echo $d;
echo $b;
echo $c;
$datetime = date("d-n-Y / h:i:s");	
$subject ="Thank you for Consideration";
//$msg .="Thank You for registering on our website on ".$datetime."<br><br>";
$msg .="---------- Lost and Found Details ---------------";
$msg .="Location: 	".$d;
				$msg .="landmark: 	".$b;
$msg .="Problems: 		".$c;

$msg .="-----------------------------------------------";
mail($to,$subject,$msg);
?>