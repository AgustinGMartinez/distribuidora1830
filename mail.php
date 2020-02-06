<?php

if (!$_SERVER['REQUEST_METHOD'] === 'POST') exit;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

$data = json_decode(file_get_contents('php://input'), true);

function validata($data){
	$data = stripcslashes($data);
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($data['name'])) $name = validata($data['name']);
else $name = "";
if (isset($data['email'])) $email = validata($data['email']);
else $email = "";
if (isset($data['message'])) $message = validata($data['message']);
else $message = "";
if (isset($data['subject'])) $subject = validata($data['subject']);
else $subject = "";
if (isset($data['phone'])) $phone = validata($data['phone']);
else $phone = "";

if ($message !== "" && $email !== "") {

	$email_body = "Nombre: $name\n";
	if (isset($phone)) $email_body .= "Telefono: $phone\n";
  $email_body .= "Email: $email\n";
	$email_body .= "Asunto: $subject\n\n";
  $email_body .= "Mensaje:\n$message\n";

	try {
		$mail->CharSet = 'UTF-8';
		$mail->setFrom($email, $name);
		$mail->addAddress('pedidos1830@gmail.com');     // Add a recipient
		$mail->addReplyTo($email, $name);
		$mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = "Contacto desde la página web 1830";
    $mail->Body    = $email_body;
    $sent = $mail->send();
		if ($sent) {
	 		echo json_encode(array("message" => "success"));
	 	} else {
	 		echo json_encode(array("message" => "not sent"));
		}
	} catch (Exception $e) {
    echo json_encode(array("message" => 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo));
	}
} else {
	echo json_encode(array("message" => "invalid data"));
}

?>
