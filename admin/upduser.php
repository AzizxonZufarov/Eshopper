<?php
 include "inc/bd.php";

$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$admin = $_POST['admin'];
$res = mysqli_query($con,"SELECT * FROM users WHERE id= $id");

$res2 = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email',password = '$password', isAdmin = '$admin'  WHERE id = $id");

header("location:users.php");
