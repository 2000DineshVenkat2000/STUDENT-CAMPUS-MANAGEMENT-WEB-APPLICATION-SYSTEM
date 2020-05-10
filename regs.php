<?php

session_start();
require('database_access.php');
include('mailer.php');
 

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase
//mysqli_select_db($con,'login');

$name = $_POST['username']; 
$pass = $_POST['password'];	
$email= $_POST['email'];		
$mobno= $_POST['mobno'];
$datetime = date("d-n-Y / h:i:s");	


$s = "select * from register where name = '$name' || email = '$email' || phno = '$mobno' "; //MySQL select query.
$result = mysqli_query($con, $s);	//Executing the select table query.
$num = mysqli_num_rows($result);	//return 1 if the condition is true else return 0 if condition is false

if($num == 1)
{
	header('location:makeup/tryagain.html');
} 

else 
{
	$reg = "insert into register(name, password, email, phno) values('$name','$pass','$email','$mobno')";//inserting the values into DataBase.
	mysqli_query($con, $reg); // Executing the insertion query.
	sendmail($name,$pass,$email,$mobno,$datetime); //calling the PHPMailer function.
	header('location:makeup/thankyou.html');
}

/*Using the PHP Mailer class*/
function sendmail($name,$pass,$email,$mobno,$datetime)
	{
		global $msg, $subject;
				$subject ="Thank you for Registering on our Website Mr/Mrs ".$name." .";
				$msg .="Thank You ".$name." for registering on our website on ".$datetime."<br><br>";
				$msg .="---------- Registration Details ---------------<br><br>";
				$msg .="User Name: 	".$name."<br><br>";
				$msg .="Password: 	".$pass."<br><br>";
				$msg .="Email: 		".$email."<br><br>";
				$msg .="Mobile Number:".$mobno."<br><br>";
				$msg .="-----------------------------------------------<br>";

			mail::sendmail($subject,$msg,$email);  
	}
?>