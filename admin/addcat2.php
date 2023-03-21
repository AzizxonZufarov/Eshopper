<? include "inc/bd.php";?>
<?

	 $name = $_POST['name'];
	 $res = mysqli_query($con,"SELECT * FROM category WHERE name= '$name' ");
	$row = mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)<=0){
	$res2 = mysqli_query($con,"INSERT INTO category (name) VALUES('$name')");

}

header("location:category.php");
?>
