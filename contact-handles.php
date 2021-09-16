<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$msg = $_POST['msg'];

$to = "jaskaranyadav45@gmail.com";

$headers = "From: Healing Angles Acadamia \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // $to = $_POST['mail'];
    
    $message = '<div style=" width: 600px; border:2px solid #2363d3; border-radius:10px">
    <h2 style="padding: 8px; background: #2363d3; color:white; text-align:center;">Healing Angles Acadamia</h2>
    <div style="padding: 20px">
    Hi,<br>
    We have a new enquiry from website\'s contact form<br>
    <h3>Name: '.$name.'</h3>
    <h3>Email: '.$email.'</h3>
    <h3>Phone No. : '.$phone.'</h3>
    <h3>Message : '.$msg.'</h3>
    </div>
    <h4 style="padding:  10px;background: #2363d3; text-align:center; color: white;">This an automated mail from Healingacadamia.com website.</h4>
    </div>';

    mail($to, "New Enquiry From Website", $message, $headers);

?>