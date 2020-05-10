<?php

session_start();
//require('database_access.php');
//include('lostorfoundmailer.php');
 

//$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase
//mysqli_select_db($con,'login');
$msg="";
//$to="bharathkuppu2000@gmail.com";
$headers = "From Lost and Found Management";
$a = $_POST['a'];	
echo $a;
if(strcmp($a,"MECH")==0)
{
	$to="bharathkuppu2000@gmail.com";
}
if(strcmp($a,"CSE")==0)
{
	$to="harishvm003@gmail.com";
}
if(strcmp($a,"ECE")==0)
{
	$to="bharathkuppu2000@gmail.com";
}
if(strcmp($a,"PRINCIPAL")==0)
{
	$to="bharathkuppu2000@gmail.com";
}
echo "-Complaint Registered Successfully.";
$comments= $_POST['comments'];		
$datetime = date("d-n-Y / h:i:s");	
$subject ="Thank you for Consideration";
//$msg .="Thank You for registering on our website on ".$datetime."<br><br>";
$msg .="---------- Complaints from Student ---------------";
$msg .="Dear ".$a;
$msg .="comment: ".$comments;

$msg .="-----------------------------------------------";
mail($to,$subject,$msg);
?>