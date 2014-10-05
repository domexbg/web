<?php
function emailWithAttachment($to, $subject, $message, $attachment) {

    $mail = new PHPMailer();

    $mail->AddAddress($to);

    $mail->From         = "your@email.com";
    $mail->FromName     = "Your Name";
    $mail->Subject      = $subject;
    $mail->Body         = $message;

    $mail->AddAttachment($attachment);

}
    if(isset($_POST['submit']))
    {

        //The form has been submitted, prep a nice thank you fullname
        $output = '<h1>Thanks for your file and fullname!</h1>';

        //Set the form flag to no display (cheap way!)
        $flags = 'style="display:none;"';

        // include and start phpmailer
        require_once('PHPMailer_5.2.4/class.phpmailer.php');
        $mail = new PHPMailer();

        //Deal with the email
        $mail->From = "webmaster@example.com"; // from
        $mail->AddReplyTo("webmaster@example.com", "Webmaster"); // reply to address/name

        $mail->AddAddress('nullman@abv.bg'); // to address

        $mail->Subject = 'A file for you'; // subject

        $mail->Body = $fullname; // body

        $mail->AddAttachment($_FILES['file']['tmp_name']); // attach uploaded file
    }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MailFile</title>
</head>

<body>


<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p><label for="fullname">Full name</label> <input name="fullname" id="fullname" /></p>
<p><label for="file">File</label> <input type="file" name="file" id="file"></p>
<p><input type="submit" name="submit" id="submit" value="send"></p>
</form>
</body>
</html>