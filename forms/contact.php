<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>

<?php

// use PHPMailer\PHPMailer\PHPMailer;
// require __DIR__ . '/vendor/autoload.php';

// $errors = [];
// $errorMessage = '';

// if (!empty($_POST)) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name)) {
//         $errors[] = 'Name is empty';
//     }

//     if (empty($email)) {
//         $errors[] = 'Email is empty';
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = 'Email is invalid';
//     }

//     if (empty($message)) {
//         $errors[] = 'Message is empty';
//     }


//     if (!empty($errors)) {
//         $allErrors = join('<br/>', $errors);
//         $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
//     } else {
//         $mail = new PHPMailer();

//         // specify SMTP credentials
//         $mail->isSMTP();
//         $mail->Host = 'smtp.mailtrap.io';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'd5g6bc7a7dd6c7';
//         $mail->Password = '27f211b3fcad87';
//         $mail->SMTPSecure = 'tls';
//         $mail->Port = 2525;

//         $mail->setFrom($email, 'Mailtrap Website');
//         $mail->addAddress('piotr@mailtrap.io', 'Me');
//         $mail->Subject = 'New message from your website';

//         // Enable HTML if needed
//         $mail->isHTML(true);

//         $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
//         $body = join('<br />', $bodyParagraphs);
//         $mail->Body = $body;

//         echo $body;
//         if($mail->send()){

//             header('Location: thank-you.html'); // redirect to 'thank you' page
//         } else {
//             $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
//         }
//     }
// }


$mail_to_send_to = "dstarite@gmail.com";
$from_email = "dstariteTechnology@dstarite.com";
$sendflag = $_REQUEST['sendflag'];    
$name=$_REQUEST['name'];
if ( $sendflag == "SendMessage" )
        {
                $subject= "subject";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
        ?>

?>