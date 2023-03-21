<?php
 include "inc/bd.php";

$id = $_POST['id'];

$name = $_POST['name'];

 $res = mysqli_query($con,"SELECT * FROM category WHERE name= '$name' ");
	$row = mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)<=0){

$res = mysqli_query($con,"UPDATE category SET name = '$name' WHERE id = $id");
}
header("location:category.php");
