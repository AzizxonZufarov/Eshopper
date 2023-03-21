<?php
session_start();
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>
<section id="cart_items">
	<div class="container">
		<div class="row">

							<section id="cart_items">
						<div class="container">
							<div style="" class="row">
								<div class="table-responsive cart_info">
									<table class="table table-condensed">
										<thead>
											<tr class="cart_menu">
												<td  class="image"><a style="color: white;" href="category.php">Category Edit</a></td>
												<br />
											</tr>
										</thead>
														</table>
													</div>
								<div class="table-responsive cart_info">
									<table class="table table-condensed">
										<thead>
											<tr class="cart_menu">
												<td  class="image"><a style="color: white;" href="users.php">Users Edit</a></td>
												<br />
											</tr>
										</thead>
														</table>
													</div>
								<div class="table-responsive cart_info">
									<table class="table table-condensed">
										<thead>
											<tr class="cart_menu">
												<td  class="image"><a style="color: white;" href="items.php">Items Edit</a></td>
												<br />
											</tr>
										</thead>
														</table>
													</div>
							</div>

										</div>
				</section>
        </div>
        </div>

</section> <!--/#cart_items-->


	<? include "inc/footer.php";?>
