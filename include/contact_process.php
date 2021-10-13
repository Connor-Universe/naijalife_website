<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


date_default_timezone_set('Etc/UTC');

require 'phpmailer/vendor/autoload.php';
   // define variables and set to empty values
 $email_err =$first_name_err= $last_name_err = $message_err = $subject_err ="";
 $email2 =$first_name= $last_name = $message =$subject = $success = $fail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  if (empty($_POST["first_name"])) {
    $first_name_err = "<span class='error'>Name is required!</span>";
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      $first_name_err = "<span class='error'>Only letters and white space allowed!</span>";
    }
  }
  if (empty($_POST["last_name"])) {
    $last_name_err = "<span class='error'>Name is required!</span>";
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      $last_name_err = "<span class='error'>Only letters and white space allowed!</span>";
    }
  }
  if (empty($_POST["message"])) {
    $message_err = "<span class='error'>Message is required!</span>";
  } else {
    $message = test_input($_POST["message"]);
    
    }
  
  if (empty($_POST["subject"])) {
    $subject_err = "<span class='error'>Phone No Required!</span>";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if name only contains letters and whitespace

  }
  if (empty($_POST["email"])) {
    $email_err = "<span class='error'>Email is required!</span>";
  } else {
    $email2 = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<span class='error'>Invalid email format!</span>";
    }
  }
 
   if ( $last_name_err == ""and $first_name_err=="" and $email_err == "" and $subject_err == "" and $message_err == ""){
   
       
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = false;
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
  );

//Set AuthType to use XOAUTH2
$mail->AuthType = 'XOAUTH2';

//Fill in authentication details here
//Either the gmail account owner, or the user that gave consent
$email1 = 'dummyouth123@gmail.com';
$clientId = '1044474112853-aa91skh2pdqiqna92g7lr0vcam7vac34.apps.googleusercontent.com';
$clientSecret = '_gHRv_yHmNuIULJv0PYRqsMp';

//Obtained by configuring and running get_oauth_token.php
//after setting up an app in Google Developer Console.
$refreshToken = '1//03SEAiLBdMUDiCgYIARAAGAMSNwF-L9Ir7CoYrJ6n5BVHnpbxiiMb0YCI5zxkOiFEmI8_kmEq-eIV9bvCkOEZLo9zSUEuRlTK6mo';

$mail->oauthUserEmail = "dummyouth123@gmail.com";
$mail->oauthClientId = "1044474112853-aa91skh2pdqiqna92g7lr0vcam7vac34.apps.googleusercontent.com";
$mail->oauthClientSecret = "_gHRv_yHmNuIULJv0PYRqsMp";
$mail->oauthRefreshToken = "1//03SEAiLBdMUDiCgYIARAAGAMSNwF-L9Ir7CoYrJ6n5BVHnpbxiiMb0YCI5zxkOiFEmI8_kmEq-eIV9bvCkOEZLo9zSUEuRlTK6mo";
//Create a new OAuth2 provider instance
$provider = new Google(
    [   
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
    ]
);

//Pass the OAuth provider instance to PHPMailer
$mail->setOAuth(
    new OAuth(
        [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => $email1,
        ]
    )
);

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
$mail->setFrom($email2,$last_name);

//Set who the message is to be sent to
$mail->addAddress($email,$last_name);

//Set the subject line
$mail->Subject = 'Contact Form:'.$subject;

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;


//Replace the plain text body with one created manually
$mail->Body='<h1 align=center>Name:'.$first_name.'<br>
Phone No:'.$subject.'<br>Email:'.$email2.'
<br>Message:'.$message.'</h1>';


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
  $fail   = "<span class='contact-fail'>Email not sent! If problem persist reach us on whatsapp!</span>"; 
 
} else {

     $success= "<span class='contact-success'>Message has sent,thank you '.$first_name.' for contacting Naijfalifeofficial!</span> ";
    
}



      }
      
  
}


 





?>