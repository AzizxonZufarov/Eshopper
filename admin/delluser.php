<? include "inc/bd.php";

$id = $_GET['id'];
$result =   mysqli_query($con,"SELECT * from users WHERE id=$id");
$res = mysqli_query($con,"DELETE FROM users WHERE id = $id");

header("location:users.php");
