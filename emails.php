<!doctype html>
<html>
	
	<head>
	<meta http-equiv="refresh" content="5; URL='http://adarush.com'">
		<style type="text/css">
		 <!––html {overflow:hidden;/}-->
		</style>
		<title>Ada Rush</title>
		<link href="adarush.css" rel="stylesheet" type="text/css"><script>var __adobewebfontsappname__="dreamweaver"</script>
		<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
	</head>
																
	<body>
		
		<h1>  Thanks, your mail has been sent. </h1>
			
  <?php
    // The message

    $email_address = $_GET["emails"];
    $message = $_GET["message"];

    $subject = 'Someone just emailed you from your own site';

    mail('keywitt@gmail.com', $email_address);
  ?>
		


	
</body></html>