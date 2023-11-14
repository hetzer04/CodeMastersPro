<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';




    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    // $text = $_POST['text'];

    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'asagaital@mail.ru';
    $mail->Password = 'MVmY49HBuqWyFGm88ake'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('asagaital@mail.ru');
    $mail->addAddress('asagaital@mail.ru');
    $mail->addAddress('user84447052+1527omcliuot5y1xzkq9@boards.trello.com');
    $mail->isHTML(true);

    $mail->Subject =  ''.$name.' '.$phone;
    $mail->Body    = '' .$name.' Контакты: ' .$phone;
    // $mail->AltBody = '' .$name.' Связаться по телефону' .$phone;

    if(!$mail->send()) {
        echo 'Error';
    } else {
        header('location: ../index.html');
    }
   
  }
?>
