<?php

class PHPMail{

	public $from;
	private $to;
	private $cc;
	private $bcc;
	public $subject;
	public $message;
	public $attachments;
	public $error_message;


	public function __construct(){
		$this->from = 'noreply@appon.org.np';
		$this->to = [];
		$this->cc = [];
		$this->bcc = [];
		$this->subject = 'Test';
		$this->message = 'Test from PHPMail - v'.phpversion();
		$this->error_message = null;
	}

	public function addTo($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			array_push($this->to, $email);			
		}		
	}

	public function addCC($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			array_push($this->cc, $email);
		}		
	}

	public function addBCC($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			array_push($this->bcc, $email);
		}		
	}

	public function addAttachment($file){
		if(file_exists($file)){
			array_push($this->attachments, $file);
		}
	}

	public function sendMail(){
		try {
			if(empty($this->from)){
				throw new Exception("Sender email is required.", 2);
			}
			if(empty($this->to)){
				throw new Exception("Atleast one recipient is required.", 2);
			}
			if(empty($this->subject)){
				throw new Exception("Subject is required.", 2);
			}
			if(empty($this->message)){
				throw new Exception("Message is required.", 2);
			}

			// compose mail
			$to = implode(',', $this->to);
			$subject = $this->subject;
			$message = $this->message;

			// Generate a unique boundary
			$boundary = md5(time());

			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-Type: multipart/mixed; boundary=' . $boundary . "\r\n";
			$headers .= 'Reply-To: '. $this->from . "\r\n";


			// Add email headers
			$headers .= 'From: '. $this->from . "\r\n";
			// Add CC if any
			if(!empty($this->cc)){
				$headers .= 'Cc: ' . implode(',', $this->cc) . "\r\n";
			}
			// Add BCC if any
			if(!empty($this->cc)){
				$headers .= 'Bcc: ' . implode(',', $this->bcc) . "\r\n";
			}			

			// Construct the message body
			$message_body = "--" . $boundary . "\r\n";
			$message_body .= 'Content-Type: text/html; charset="UTF-8"' . "\r\n";
			$message_body .= 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n";
			$message_body .= $message . "\r\n";

			// Attach files
			if(!empty($this->attachments)){

				foreach($this->attachments as $attachment) {
					$filename = basename($attachment);
					$data = file_get_contents($attachment);
					
					$message_body .= "--" . $boundary . "\r\n";
					$message_body .= 'Content-Type: application/octet-stream; name="' . $filename . '"' . "\r\n";
					$message_body .= 'Content-Transfer-Encoding: base64' . "\r\n";
					$message_body .= 'Content-Disposition: attachment; filename="' . $filename . '"' . "\r\n\r\n";
					$message_body .= chunk_split(base64_encode($data)) . "\r\n";
				}

			}

			if(mail($to, $subject, $message_body, $headers)){
				// TODO: save record of each mail sent to database
				return true;
			}else{
				$this->error_message = 'Mail failed.';
				return false;
			}


		} catch (Exception $e) {
			$this->error_message = $e->getMessage();
			return false;
		}
	}

}

?>
