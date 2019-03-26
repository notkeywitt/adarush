<!doctype html>
<html>
	
	<head>
	<meta http-equiv="refresh" content="5"; URL='http://adarush.com'" />
	</head>
	<body>
  <?php
    // The message

    $email_address = $_GET["emails"];
    $message = $_GET["message"];

    $subject = 'Someone just emailed you from your own site';

    mail('keywitt@gmail.com', $email_address);
  ?>
		
<h1>  Thanks, your mail has been sent.</h1>

	
</body></html>