<?
session_start();
include "inc/bd.php";
if($_SESSION['id']){

    $id = $_SESSION['id'];
    $res2 = mysqli_query($con,"SELECT * FROM users WHERE id= $id");
    $row2 = mysqli_fetch_assoc($res2);
    $name = $row2['name'];
    $email	= $row2['email'];

}else{
    $name	=$_POST['name'];
    $email	=$_POST['email'];
}
    $text = $_POST['text'];

foreach($_SESSION['cart'] as $id => $qty){
$res1 = mysqli_query($con,"SELECT * FROM `items` WHERE `id` = '$id' ");
$row1 = mysqli_fetch_assoc($res1);
$itemname=$row1['name'];
$price=$row1['price'];
$qnt=$qty;
$total=$price * $qnt;
$sql_query = "INSERT INTO zakaz (name, email, text, itemname, price, quantity, total) VALUES( ". $name.", ".$email.", ".$text.", ".$itemname.", ".$price.", ".$qnt.", ".$total.")";
$res3 = mysqli_query($con,"INSERT INTO zakaz (name, email, text, itemname, price, quantity, total, sql_query) VALUES('$name', '$email', '$text', '$itemname', '$price', '$qnt', '$total', '$sql_query')");

}
unset($_SESSION['cart']);
header("location:cart.php");
