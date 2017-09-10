<?php

$to = 'avnishsinghjat@gmail.com';
$subject = "message";
$email = $_POST[e1];
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Sender Name <admin@softevolve.com>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to,$subject ,$email  , implode("\r\n", $headers));

header('Location: index.html');
?>