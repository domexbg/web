<?php

$to =  "lilikazakova@gmail.com";                                                   // TO CHANGE recipient's email
$from = "lilikazakova@gmail.com";                                               // TO CHANGE sender's e-mail
$replyto = "emailtoreply@somewhere.com";                                            // TO CHANGE email to reply  
$subject = "envelop_information";                                                   // TO CHANGE subject line
$msg = "Please find attached the last updated tale with the newest data";           // TO CHANGE the message
$attachement = "information.csv";                                                 // YOU CAN LEAVE IT OR CHANGE IT path to the csv file
$fileType = "text/csv";                                                             //file type
$fileName = "information.csv";                                                      // Filename that will be used for the file as the attachment

$file = fopen($attachement,'rb');
$data = fread($file,filesize($attachement));
fclose($file);
$semi_rand = md5(date('r', time()));
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers = "From: ". $from . "\r\n" . "Reply-To: " . $replyto;
$headers .= "\r\nMIME-Version: 1.0\r\n" .
"Content-Type: multipart/mixed;\r\n" .
" boundary=\"{$mime_boundary}\"";
$emailMsg = "This is a multi-part message in MIME format . \n\n" .
"--{$mime_boundary}\n" .
"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $msg;
$emailMsg .= "\n\n";
$data = chunk_split(base64_encode($data));
$emailMsg .= "--{$mime_boundary}\n" .
"Content-Type: {$fileType};\n" .
" name=\"{$fileName}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}--\n";

$mailSent = mail($to,$subject,$emailMsg,$headers);                                                  // send email

echo $mailSent ? "Mail sent" : "Mail failed"; 

?>
