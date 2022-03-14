<?php
echo '<script> alert("Submited Order")</script>';

$fileUploded = $_FILES['uploadfile'];

print_r($fileUploded);
header( "refresh:3;url=../index.php" );
?>
