<?php

  try {

    if (isset($_POST["email"]) AND isset($_POST["name"]) AND isset($_POST["company"]) AND isset($_POST["message"]))

    header('Content-Type: application/json'); //Necessary for jQuery to understand we're sending JSON

    require_once "lib/PHPMailer/class.phpmailer.php";

    $mail = new PHPMailer(true); //We pass true to throw exceptions

    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'frank@volume7.io';
    $mail->Password = 'mariotis';
    $mail->SMTPSecure = 'ssl';

    $mail->AddReplyTo($_POST["email"], $_POST["name"]);
    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["name"];
    $mail->AddAddress('frank.marineau@gmail.com');

    $mail->Subject = 'Message du site';

    $mail->IsHTML(true);
    $mail->Body = $_POST["message"];

    if (trim($_POST["company"]) != "") {
      $mail->body .= "<hr>" . $_POST["company"];
    }

    if(!$mail->Send()) {
      $response = array(
        'success' => false
      );

      echo json_encode($response);
      exit;
    }

    $response = array(
      'success' => true
    );

    echo json_encode($response);
  }
  catch(Exception $e) {
    $response = array(
      'success' => false
    );

    echo json_encode($response);
  }

?>