
<?
include "inc/bd.php";
$min = $_GET['min'];
$max = $_GET['max'];

$res = mysqli_query($con,"SELECT * FROM `items` (price BETWEEN '$min' AND '$max') ");


while($row = mysqli_fetch_assoc($res)){?>
				<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>$<?=$row['price']?></h2>
											<p><a style="color: white;"  href="product-details.php?id=<?=$row['id']?>"><?=$row['name']?></a></p>
											<a href="addcart.php?id=<?=$row['id']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$<?=$row['price']?></h2>
												<p><a style="color: white;"  href="product-details.php?id=<?=$row['id']?>"><?=$row['name']?></a></p>

												<a href="addcart.php?id=<?=$row['id']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
				</div>

<? }?><?php

?>















<?php

//fetch.php

$connect = new PDO("mysql:host=localhost; dbname=tbl_product", "root", "");

$query = "
	SELECT * FROM tbl_product WHERE price BETWEEN '".$_POST["minimum_range"]."' AND '".$_POST["maximum_range"]."' ORDER BY price ASC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h4 align="center">Total Item - '.$total_row.'</h4>
<div class="row">
';

if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-2">
			<img src="images/'.$row["image"].'" class="img-responsive img-thumnail img-circle" />
			<h4 align="center">'.$row["name"].'</h4>
			<h3 align="center" class="text-danger">'.$row["price"].'</h3>
			<br />
		</div>
		';
	}
}
else
{
	$output .= '
		<h3 align="center">No Product Found</h3>
	';
}
$output .= '
</div>
';

echo $output;

?>
