<? include "inc/bd.php";?>
<?
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $res = mysqli_query($con,"SELECT * FROM users WHERE name= '$name'");
	 	$row = mysqli_fetch_assoc($res);
		if(mysqli_num_rows($res) <=0){
		$res2 = mysqli_query($con,"INSERT INTO users (name, email, password) VALUES('$name','$email','$password')");
		}

header("location:users.php");
?>
