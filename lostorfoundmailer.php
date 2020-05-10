<?php
class mail
{
	public static function sendmail($subject, $body, $address)
	{
		$headers='From Lost and Found Management';
		//mail($address,$subject,$body,$headers);
		require_once('phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->SMTPAuth= true;
			$mail->SMTPSecure = 'ssl';
			$mail->Host='smtp.gmail.com';
			$mail->Port='465';
			$mail->isHTML();
			$mail->Username='dineshvenkatm@gmail.com';
			$mail->Password='9626210026';
			$mail->SetFrom('dineshvenkatm@gmail.com');
			$mail->Subject=$subject;
			$mail->Body=$body;
			$mail->AddAddress($address);

			$mail->Send();
	}
}
?>