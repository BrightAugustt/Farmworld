<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/
include_once '../controllers/crop_controller.php';
//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587"; 
//Set gmail username
	$mail->Username = "farmaworld2023@gmail.com";
//Set gmail password
	$mail->Password = "vjvoplfubhmglpny";
//Email subject
	$mail->Subject = "Changes required with crops information recieved";
//Set sender email
	$mail->setFrom('farmaworld2023@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
//Add recipient
	$mail->addAddress(Sendemail_ctr($customer_id));
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo'Email could not be sent. Error: ' . $mail->ErrorInfo;
	}
//Closing smtp connection
	$mail->smtpClose();
