<?php
 include "inc/bd.php";
session_start();

$id = $_POST['id'];

$name = $_POST['name'];

$email = $_POST['email'];

$password = $_POST['password'];


$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email',password = '$password'  WHERE id = $id");

header("location:cab.php");
