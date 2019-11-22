


<?php


$localhost = "localhost"; 
$root = "root";
$pass = "";
$db = "faq";

$conn = ( '$localhost' , '$root', '$pass', '$db'  );

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$msg = $_POST['msg'];

$sql = "INSERT INTO faq1 values('$fname', '$lname', '$email', '$phone1', '$phone2', '$msg' )";
$check = $conn -> query($sql);

?>