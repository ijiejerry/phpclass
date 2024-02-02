<?php
//what to do with form data
$title = "Your Information";
include 'exe2/header.php';

$jerry = $_POST["jerry"];
$email = $_POST["email"];

echo "Hello " . $jerry. " <br>Your email id is: " . $email;

include 'exe2/footer.php';

?>