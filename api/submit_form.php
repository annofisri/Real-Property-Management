<?php

date_default_timezone_set('Asia/Kathmandu');

header("Content-Type: application/json");

// default json output
$output = [];
$output['status'] = false;
$output['text'] = '';
$output['data'] = '';

// include PHPMail for sending mail
require_once('../require/PHPMail.php');

$mail = new PHPMail();


if(true){

	$mail->subject = 'Contact Form - appon.org.np';
	$mail->message = '<html><title>Notification</title><body>';

	$mail->message .= '<h2>Overview of Contact Form</h2>';
	$mail->message .= '<table>';
	$mail->message .= '<tr><td colspan="2"><b>Form Details:</b></td></tr>';

	foreach($_POST as $key=>$value){
		$key = ucwords(str_replace('_', ' ', htmlentities(strip_tags($key))));
		$value = htmlentities(strip_tags($value));
		$mail->message .= "<tr><td>$key</td><td>: $value</td></tr>";
	}

	$mail->message .= '<tr><td colspan="2">&nbsp;</td></tr>';
	$mail->message .= '<tr><td colspan="2"><b>Additional Details:</b></td></tr>';
	$mail->message .= '<tr><td>Datetime</td><td>: '.date('Y-m-d H:i:s', time()).'</td></tr>';
	$mail->message .= '<tr><td>IP</td><td>: '.$_SERVER['REMOTE_ADDR'].'</td></tr>';
	$mail->message .= '<tr><td>Referer</td><td>: '.$_SERVER['HTTP_REFERER'].'</td></tr>';
	$mail->message .= '</table>';
	$mail->message .= '</body></html>';


	$mail->addTo('appon123@gmail.com');

	if($mail->sendMail()){
		$output['status'] = true;
		$output['text'] = 'Message has been sent.';
	}else{
		$output['text'] = $mail->error_message;
	}


}


echo json_encode($output);
exit();

?>