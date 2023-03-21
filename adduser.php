<? include "inc/bd.php";?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$res = mysqli_query($con,"INSERT INTO users (name,email,password)VALUES('$name','$email','$password')");

header("location:index.php");
?>
