<? include "inc/bd.php";

$id = $_GET['id'];
$result =   mysqli_query($con,"SELECT * from items WHERE cat_id=$id");

if(mysqli_num_rows($result) <= 0){

    $res = mysqli_query($con,"DELETE FROM category WHERE id = $id");
}

header("location:category.php");
