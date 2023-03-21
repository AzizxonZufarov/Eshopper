<? include "inc/bd.php";

$id = $_GET['id'];
$result =   mysqli_query($con,"SELECT * from items WHERE id=$id");

    $res = mysqli_query($con,"DELETE FROM items WHERE id = $id");

header("location:items.php");
