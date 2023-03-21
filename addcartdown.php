<?php
session_start();

$id = $_GET['id'];

if($_SESSION['cart'][$id]){

	$_SESSION['cart'][$id]--;

}else{


	$_SESSION['cart'][$id] = 1;
}

header("location:cart.php");
?>
