<?php
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("example@example.com", "Test Email", "This is a test email.");
?>