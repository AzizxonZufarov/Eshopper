<?php
session_start();
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>
<section id="cart_items">
	<div class="container">
		<div class="row">


	<div class="col-sm-12 padding-right">
		<div class="breadcrumbs">

		</div>
		<div class="table-responsive cart_info">

 <?
 $id = $_GET['id'];
 $res = mysqli_query($con,"SELECT * FROM items");
   $row = mysqli_fetch_assoc($res);
	 if(mysqli_num_rows($res)>0){?>
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="description">Item Name</td>
						<td class="total">EDIT Item</td>
						<td class="total">DELETE Item</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
<?
						 do{?>
					<tr>
						<td class="cart_description">
							<h6><?=$row['name']?></h6>
						</td>

						<td class="cart_total">
							<p class="cart_total_price"><a href="edititem.php?id=<?=$row['id']?>">Edit</a></p>
						</td>
						<td class="cart_total">
							<p class="cart_total_price"><a href="dellitem.php?id=<?=$row['id']?>">Delete</a></p>
						</td>
					</tr>
						<? }while($row = mysqli_fetch_assoc($res));?>
				</tbody>
			</table><?	 }?>
            <h2><a href="additem.php">Add item</a> </h2>
		</div>
	</div>
	</div>
	</div>
</section> <!--/#cart_items-->


	<? include "inc/footer.php";?>
