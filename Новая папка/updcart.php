<?php
 include "inc/bd.php";
session_start();

$id = $_POST['id'];

foreach($_SESSION['cart'] as $id => $qty){

$res = mysqli_query($con,"SELECT * FROM `items` WHERE `id` = '$id' ");

while($row = mysqli_fetch_assoc($res)){
	
$name = $row['name'];
=$row['price']
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><??></a></h4>
								<p>Web ID: <?=$row['id']?></p>
							</td>
							<td class="cart_price">
								<p>$<??></p>
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

$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email',password = '$password'  WHERE id = $id");

header("location:cab.php");?>
