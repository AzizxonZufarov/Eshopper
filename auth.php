<?
session_start();
 include "inc/bd.php";?>
<?php

$email = $_POST['email'];
$password = $_POST['password'];


$res = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password = '$password' ");

$row = mysqli_fetch_assoc($res);
	if(mysqli_num_rows($res)>0){

		$_SESSION['id'] = $row['id'];
	header("location:cab.php");

	}else{

		header("location:login.php");

	}
?>
