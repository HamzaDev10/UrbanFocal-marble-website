<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['email'])) {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['telephone'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $mail = new PHPMailer(true);

   try {

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'shaikhfareed100@gmail.com';
      $mail->Password = 'ogxi slph jaxn jjll';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->setFrom('shaikhfareed100@gmail.com', 'Website Contact');
      $mail->addAddress('shaikhfareed100@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = "New Contact Message";

      $mail->Body = "
      Name: $name <br>
      Email: $email <br>
      Phone: $phone <br>
      Subject: $subject <br>
      Message: $message
   ";

      $mail->send();

      $mail->clearAddresses();

      $mail->addAddress($email);

      $mail->Subject = "Thank you for contacting us";

      $mail->Body = "
      Hello $name,<br><br>
      Thank you for contacting us. We received your message and will reply soon.<br><br>
      Best Regards
   ";

      $mail->send();

      echo "Message Sent Successfully";

   } catch (Exception $e) {
      echo "Mailer Error: {$mail->ErrorInfo}";
   }

}

?>