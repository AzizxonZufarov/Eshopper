<?
$id = $_GET['id'];
echo $id;?>
	<section id="cart_items">
			<?
			          if($_SESSION['cart']){?>			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
<?
foreach($_SESSION['cart'] as $id => $qty){

$res = mysqli_query($con,"SELECT * FROM `items` WHERE `id` = '$id' ");

while($row = mysqli_fetch_assoc($res)){?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$row['name']?></a></h4>
								<p>Web ID: <?=$row['id']?></p>
							</td>
							<td class="cart_price">
								<p>$<?=$row['price']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="addcart.php?id=<?=$row['id']?>"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$qty?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="addcartdown.php?id=<?=$row['id']?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?=$row['price'] * $qty ?></p>
							</td>
							<td class="cart_delete">
							<a class="cart_quantity_delete" href="delcart.php?id=<?=$row['id']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>

<?}}

?>


					</tbody>
				</table>
			</div>
			<?}else{?>
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Empty</td>
								<td></td>
							</tr>
						</thead>

											</tbody>
										</table>
									</div>
		<?	}?>

			</section> <!--/#cart_items-->
