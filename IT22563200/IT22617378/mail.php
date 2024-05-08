<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:".$name."<".$email.">\r\n";
    $recepient = "THEHOME@gmail.com";
    mail($receptient,$subject,$message,$mailheader)
    or die("error");

    echo"message send";
?>