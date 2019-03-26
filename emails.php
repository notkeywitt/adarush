<?php
 $path = 'emails.csv';
 if (isset($_POST['emails'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['emails'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>