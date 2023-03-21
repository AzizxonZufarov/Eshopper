
<?
include "inc/bd.php";
$id = $_GET['id'];

$res = mysqli_query($con,"SELECT * FROM `items`ORDER BY `id` ASC LIMIT $offset,$per_page ");


while($row = mysqli_fetch_assoc($res)){?>
				<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">

											  <img src="<?=$row['img']?>" width="255px" height="300px"/>
											<h2>$<?=$row['price']?></h2>
											<p><a style="color: white;"  href="product-details.php?id=<?=$row['id']?>"></a><?=$row['name']?></p>
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

<? }?>
