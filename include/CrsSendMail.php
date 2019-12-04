<?php
require_once dirname(__FILE__) ."/crs-mail-template.php";
if(!class_exists("CrsSendMail")) :
    class CrsSendMail {
        private $recipent;
        private $subject;
        private $message;
        private $headers;
        function __construct($recipent, $subject, $message, $headers) {
            $this->recipent = $recipent;
            $this->subject = $subject;
            $this->message = $message;
            $this->headers = $headers;
        }
        public function sendMail() {
            return mail($this->recipent, $this->subject, $this->message, $this->headers);
        }
    }
endif;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $emailAddress = $_POST["cc_email"];
    $emailSubject = "Express Entry CRS Score";
    $thankyouPage = "";
    $mail = new CrsSendMail($emailAddress, $emailSubject, emailMessage(), $headers);
    if($mail->sendMail()) {
	header("Location: http://www.imigrim.com/staging/crs-thank-you-page/");
	exit();
    }
}