
<?php

if($_POST)
{
 
 	

    //require('constant.php');
    	$message = '';
     	$name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
      	$email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
      	$subject   = filter_var($_POST["subject"], FILTER_SANITIZE_EMAIL);
      	$phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
      	$content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
    ob_start();
 	include 'bt.phtml';
 	$html = ob_get_clean();

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




require 'phpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->Username = 'prakashk827@gmail.com';                 // SMTP username
$mail->Password = 'c7f718@All'; 

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);                          // SMTP password


$mail->setFrom($email, $subject); // Contact form email id
$mail->addAddress('prakashk827@gmail.com');     // Add a recipient
//$mail->addAttachment('img/about/1.jpg'); 
$mail->AddEmbeddedImage("img/mail/mail.png", "envelope");
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Response From Khushi Infotech Website';
$mail->Body    = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Response</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
  
  
  
</style>
<body style="overflow-y: scroll;background: #009bff; 
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);height:350px;font-family: Helvetica, Arial, sans-serif;">

    <br><br><br><br><br><br>

<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="col-sm-12" style="position:relative;width:80%;padding:3%;margin-left:10%;border-radius:10px;background-color:white;">
        <div class="col-sm-4">
            <center>
            <img style="width:150px;" alt="PHPMailer" src="cid:envelope">
            </center>
        </div>
        <div class="col-sm-8">
          <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="margin-top:12%;">
              <p style="font-size:15px;font-weight:bold;text-align:center;">A NEW OPPORTUNITY WITH US</p>

              <p style="width:90%;margin-left:5%;background-color:#e6e6e6;padding:5px;border-radius:10px;font-weight:bold;">Name:'. $name.'</p>
              <p style="width:90%;margin-left:5%;background-color:#e6e6e6;padding:5px;border-radius:10px;font-weight:bold;">Subject:'. $subject.'</p>
              <p style="width:90%;margin-left:5%;background-color:#e6e6e6;padding:5px;border-radius:10px;font-weight:bold;">Message:'. $content.'</p>
              <a style="color:black" href="tel:'.$phone.'">
              <p style="width:90%;margin-left:5%;background-color:#e6e6e6;padding:5px;border-radius:10px;font-weight:bold;">Mobile No.:'. $phone.'</p>
              </a>
              <p style="width:90%;margin-left:5%;background-color:#e6e6e6;padding:5px;border-radius:10px;font-weight:bold;">Email ID :'. $email.'</p>
          </div> 
            <div class="col-sm-2"></div>
          </div>
         
        </div>
        
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>

</body>
</html>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
	
}
?>