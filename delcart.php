<?php
session_start();

$id = $_GET['id'];

if($_SESSION['cart'][$id])
{
	 unset($_SESSION['cart'][$id]);
}

header("location:cart.php");
?>
