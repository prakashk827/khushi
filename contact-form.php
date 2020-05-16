<?php
if($_POST)
{
    require('constant.php');
    $message = '';
    echo $name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
   echo $email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
   echo  $subject   = filter_var($_POST["subject"], FILTER_SANITIZE_EMAIL);
   echo  $phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
   echo  $content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
	//reCAPTCHA validation
	/*if (isset($_POST['g-recaptcha-response'])) 
	{
		
		require('component/recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) 
		  {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}*/
	$message = '
			<h3 align="center">Contact Form</h3>
			<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">'.$_POST["name"].'</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%">'.$_POST["email"].'</td>
			</tr>
			<tr>
				<td width="30%">Subject</td>
				<td width="70%">'.$_POST["subject"].'</td>
			</tr>
			<tr>
				<td width="30%">Phone Number</td>
				<td width="70%">'.$_POST["phone"].'</td>
			</tr>				
			<tr>
				<td width="30%">Message</td>
				<td width="70%">'.$_POST["content"].'</td>
			</tr>
			
			</table>';
 
		//require 'class/class.phpmailer.php';

		require 'class/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		//$mail->IsSMTP();        //Sets Mailer to send message using SMTP
		$mail->SMTPOptions = [
			'ssl' => [
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			]
		];
		$mail->Host = 'smtp.gmail.com'; //smtp.zoho.com  //Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = 587;        //Sets the default SMTP server port
		$mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
		
		$mail->SMTPAutoTLS = false;
		$mail->SMTPSecure = 'tls';

		//$mail->SMTPSecure = 'tls';	//Extra Line	
		
		$mail->Username = 'prakashk827@gmail.com'; //info@khushinfotech.com     //Sets SMTP username
		$mail->Password = 'c7f718@All'; //khushi@777    //Sets SMTP password
		//$mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST["email"];     //Sets the From email address for the message
		$mail->FromName = $_POST["name"];    //Sets the From name of the message
		$mail->addAddress('pallavik827@gmail.com.com');  // (onkar.connect@gmail.com, 'Onkar naik')  //Adds a "To" address
		$mail->addReplyTo("prakashk827@gmail.com");
		$mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);       //Sets message type to HTML
		//$mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
		$mail->Subject = $subject;    //Sets the Subject of the message
		$mail->Body = $content;       //An HTML or plain text message body

		if($mail->Send())        //Send an Email. Return true on success or false on error
		{
			$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
			
		}
		else
		{
			$output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'));
	    die($output);
		}
}
?>