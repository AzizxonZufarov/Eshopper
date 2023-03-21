<?php
include "inc/bd.php";
?>
<?php
//index.php
$minimum_range = 3000;
$maximum_range = 5000;
?>
<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Категории</h2>

						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?
								$res = mysqli_query($con,"SELECT * FROM category");
								$row = mysqli_fetch_assoc($res);

									do{?>

							<div class="panel panel-default">

								<div class="panel-heading">
									<h4 class="panel-title">

										<a href="" class="cats" data-id="<?=$row['id']?>" >

											<span ></span><?=$row['name']?>
										</a>
									</h4>
								</div>

							</div>
<? }while($row = mysqli_fetch_assoc($res));?>
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Бренды</h2>
							<div class="brands-name">
								<?
								$result =   mysqli_query($con,"SELECT * from brands");
								if(mysqli_num_rows($result) ==0){
									echo "<h2>Категорий нет</h2>";
								}else {

						 echo '<h2>Брендов найдено -' . mysqli_num_rows($result). '</h2>';
					}?>
								<ul class="nav nav-pills nav-stacked">

<?$res = mysqli_query($con,"SELECT * FROM brands");

$row = mysqli_fetch_assoc($res);
do{?>
									<li><a href="" class="brands" data-id="<?=$row['id']?>" > <span class="pull-right"></span><?=$row['name']?></a></li>
<? }while($row = mysqli_fetch_assoc($res));?>
								</ul>
							</div>
						</div><!--/brands_products-->


	<!--
							<div class="col-sm-3">
								<input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
							</div>
							<div class="col-sm-6" style="padding-top:12px">
								<div id="price_range"></div>
							</div>
							<div class="col-sm-3">
								<input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
							</div>
						</div>
-->


					</div>
				</div>




							<div id="load_product"></div>
