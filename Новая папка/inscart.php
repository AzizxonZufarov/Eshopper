<?php
session_start();
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
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

<?}}?>


					</tbody>
				</table>
			</div>
		</div>
			</section> <!--/#cart_items-->


	<section id="cart_items">
		<div class="container">
					<div class="replay-box">
					<div class="row">
					          			
					<form action="updcart.php" method="post">
					
					
					<?if($_SESSION['id']){
					     $id = $_SESSION['id'];
						 $res = mysqli_query($con,"SELECT * FROM users WHERE id= $id");
						 $row = mysqli_fetch_assoc($res);
						 $row['name'];
						 $row['email'];
						?>
						<div class="col-sm-4">
							<h2>Leave a replay</h2>
						<div class="blank-arrow">
							<label>Your Name</label>
						</div>
						<span>*</span>
						<input type="text" name="author" value="<?=$row['name']?>" >
						<div class="blank-arrow">
							<label>Email Address</label>
						</div>
						<span>*</span>
						<input type="email" name="email" value="<?=$row['email']?>" >

							</div><!--/Reply Box-->
						<div class="col-sm-8">
							<div class="text-area">
								<div class="blank-arrow">
									<label>Your message</label>
								</div>
								<span>*</span>
								<textarea name="text" rows="11"><?=$_POST['text']?></textarea>
								<input type="hidden" name="id" value="<?=$id?>" />
	              		<input type="submit" name="submit" value="Заказать" class="btn btn-primary" />
							</div>
						</div>
						<?}else{?>
					<div class="col-sm-4">
							<h2>Leave a replay</h2>
						<div class="blank-arrow">
							<label>Your Name</label>
						</div>
						<span>*</span>
						<input type="text" name="author" value="<?=$_POST['author']?>" >
						<div class="blank-arrow">
							<label>Email Address</label>
						</div>
						<span>*</span>
						<input type="email" name="email" value="<?=$_POST['email']?>" >

							</div><!--/Reply Box-->
						<div class="col-sm-8">
							<div class="text-area">
								<div class="blank-arrow">
									<label>Your message</label>
								</div>
								<span>*</span>
								<textarea name="text" rows="11"><?=$_POST['text']?></textarea>
								<input type="hidden" name="id" value="<?=$id?>" />
	              		<input type="submit" name="submit" value="Заказать" class="btn btn-primary" />
							</div>
						</div><?}?>						
					</form>


								</div>
							</div>
		</div>
			</section> <!--/#cart_items-->

<? include "inc/footer.php";?>
