<?php

session_start();
//require('database_access.php');
//include('lostorfoundmailer.php');
 

//$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase
//mysqli_select_db($con,'login');
$msg="";
$to="bharathkuppu@gmail.com";
$location = $_POST['location']; 
$headers = "From Lost and Found Management";
$q = $_POST['q'];	
echo $q;
$landmark= $_POST['landmark'];		
$datetime = date("d-n-Y / h:i:s");	
$subject ="Thank you for Consideration";
//$msg .="Thank You for registering on our website on ".$datetime."<br><br>";
$msg .="---------- Lost and Found Details ---------------";
$msg .="Location: 	".$location;
				$msg .="Lost/Found: 	".$q;
$msg .="landmark: 		".$landmark;

$msg .="-----------------------------------------------";
mail($to,$subject,$msg);
?>