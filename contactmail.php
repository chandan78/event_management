<?php
/*$toEmail = "indrakumar4591@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["content"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'gchandan390@gmail.com';
    $mail->Password = 'Gchandan1207#';
    $mail->setFrom($_POST["email"],$_POST["name"]);
    $mail->addAddress('gchandan390@gmail.com');
    $mail->addReplyTo($_POST["email"],$_POST["name"]);
    $mail->isHTML(true);
    $mail->Subject = "Customer";
    $mail->Body = '<h3 align=center>Name:'.$_POST["name"].'<br>Email: '.$_POST['email'].
    '<br>Message: '.$_POST["msg"].'<br>PhoneNo: '.$_POST['phone'].'</h3>';
    if($mail->send()){
        echo "<p class='alert alert-success'><b>Mail Sent.Thank You For Contacting Us, We Will Be In Touch</b></p>";
    }else{
        echo "<p class='Error'>Problem in Sending Mail.</p>";
    }
}
?>