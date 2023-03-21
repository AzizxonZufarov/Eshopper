<?php
session_start();
$id = $_SESSION['id'];
?>
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>
<section>
		<div class="container">
			<div class="row">

<?
        $id = $_GET['id'];
        $res = mysqli_query($con,"SELECT * FROM items WHERE id= $id");
$row = mysqli_fetch_assoc($res);?>
				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
									<img src="<?=$row['img']?>" width="300px" height="100px"  alt=""/>

							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$row['name']?></h2>
								<p>ID: <?=$row['id']?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>US $<?=$row['price']?></span>
									<label>Quantity:</label>
									<input type="text" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										<a style="color:white" href="addcart.php?id=<?=$row['id']?>">Add to cart</a>
									</button>
								</span>

								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->

							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p><?=$row['description']?></p>
									<p><b>Write Your Review</b></p>

									<div class="response-area">

<? $id = $_GET['id'];
$res = mysqli_query($con,"SELECT * FROM comments WHERE cat_id = $id");
$row = mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)>0){
do{?>
										<ul class="media-list">

											<li class="media">

												<a class="pull-left" href="#">

												</a>
												<div class="media-body">
													<ul class="sinlge-post-meta">
														<li><i class="fa fa-user"></i><?=$row['author']?></li>
														<li><i class="fa fa-calendar"></i><?=$row['date']?></li>
													</ul>
													<p><?=$row['text']?></p>
												</div>
											</li>

										</ul>
									<? }while($row = mysqli_fetch_assoc($res));}else{
										echo "<h2>NO RESPONSES</h2>";
									}?>
									</div><!--/Response-area-->
									<div class="replay-box">
										<div class="row">

												<form action="inscomment.php" method="post">
													<?
										if($_SESSION['id']){?>
													<div class="col-sm-12">
															<h2>Leave a replay</h2>
													<div class="text-area">
														<div class="blank-arrow">
															<label>Your message</label>
														</div>
														<span>*</span>
														<textarea name="text" rows="11"></textarea>
														<input type="hidden" name="id" value="<?=$id?>" />
							              <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
													</div>
												</div>
													<?}else{?>
														<div class="col-sm-4">
															<h2>Leave a replay</h2>
														<div class="blank-arrow">
															<label>Your Name</label>
														</div>
														<span>*</span>
														<input type="text" name="author" placeholder="write your name...">
														<div class="blank-arrow">
															<label>Email Address</label>
														</div>
														<span>*</span>
														<input type="email" name="email" placeholder="your email address...">
														<div class="blank-arrow">
															<label>Web Site</label>
														</div>
															</div><!--/Repaly Box-->
														<div class="col-sm-8">
															<div class="text-area">
																<div class="blank-arrow">
																	<label>Your message</label>
																</div>
																<span>*</span>
																<textarea name="text" rows="11"></textarea>
																<input type="hidden" name="id" value="<?=$id?>" />
									              <input type="submit" name="submit" value="submit" class="btn btn-primary" />
															</div>
														</div>

<?}?>
											</form>


								</div>
							</div>

						</div>
					</div><!--/category-tab-->


				</div>
			</div>
		</div>
	</section>



	<section id="cart_items">
		<div class="container">

		</div>
			</section> <!--/#cart_items-->
<? include "inc/footer.php";?>
