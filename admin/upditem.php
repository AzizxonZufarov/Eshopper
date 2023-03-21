<?php
 include "inc/bd.php";

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
 $res = mysqli_query($con,"SELECT * FROM items WHERE id= '$id' ");
 $row = mysqli_fetch_assoc($res);

 $res1 = mysqli_query($con,"SELECT * FROM category WHERE id = $row[cat_id]");
 $row1 = mysqli_fetch_assoc($res1);

 if(mysqli_num_rows($res1)>0){

 	$cat_id=$row1['id'];

 }else{

 	$result = mysqli_query($con,"INSERT INTO category (name) VALUES('$category')");
 	$res3 = mysqli_query($con,"SELECT * FROM category WHERE name= '$category' ");
 	$row3 = mysqli_fetch_assoc($res3);
 	$cat_id=$row3['id'];

 }

$result2 = mysqli_query($con,"UPDATE items SET name = '$name', price = '$price', cat_id = $cat_id'  WHERE id = $id");

header("location:items.php");
