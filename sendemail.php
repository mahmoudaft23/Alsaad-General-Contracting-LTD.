<?php
if(isset($_POST["Message"])&&isset($_POST["Subject"])&&isset($_POST["fname"])&&isset($_POST["lname"])) {
    $Message = $_POST["Message"];
    $to = "alsaadcompany22@gmail.com";
    $subject = $_POST["Subject"];
    $body = $Message."\r\n"."-\r\n".$_POST["fname"]." ".$_POST["lname"];
    $encodedSubject = rawurlencode($subject);
    $encodedBody = rawurlencode($body);
    $encodedTo = rawurlencode($to);
    $mailtoUrl = "mailto:$encodedTo?subject=$encodedSubject&body=$encodedBody";
    $command = "powershell -command \"Start-Process '$mailtoUrl'\"";
    shell_exec($command);
}

?>