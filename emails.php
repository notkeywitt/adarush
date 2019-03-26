<?php
if($_POST["emails"]) {
    mail("your@email.address", "Form to email message", $_POST["emails"], "From: an@email.address");
}
?>