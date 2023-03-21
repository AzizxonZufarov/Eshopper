<? include "inc/bd.php";?>

<? include "inc/header.php";?>

<section>
		<div class="container">
			<div class="row">
				<section id="form"><!--form-->
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="login-form"><!--login form-->
									<h2>Add USER</h2>
									<form action="adduser2.php" method="post" >
										<input type="name" name="name"  placeholder="Name"/>
										<input type="email" name="email"  placeholder="email"/>
										<input type="text" name="password"  placeholder="password"/>
										<button type="submit"  name="submit" class="btn btn-default">Add</button>
									</form>
								</div><!--/login form-->
							</div>

						</div>
					</div>
				</section><!--/form-->

			</div>
		</div>
</section>
	<? include "inc/footer.php";?>
