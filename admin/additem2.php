<? include "inc/bd.php";?>
<?
	 $name = $_POST['name'];

	 $price = $_POST['price'];

    
	 $category = $_POST['category'];
	
	$img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"upl/".$img);


	$res2 = mysqli_query($con,"INSERT INTO items (name, price, cat_id, img) VALUES('$name', '$price', $category, '$img')");

	header("location:items.php");
	?>