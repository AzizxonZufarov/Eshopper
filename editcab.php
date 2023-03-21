<?php
session_start();
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>

<section>
		<div class="container">
			<div class="row">
				<section id="form"><!--form-->
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="signup-form"><!--sign up form-->
									<h2>Edit Form</h2>
                  <? $id = $_GET['id'];

           			$res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

           			$row = mysqli_fetch_assoc($res);?>

									<form action="updcab.php" method="post" enctype="multipart/form-data">
										<input type="text" name="name" value="<?=$row['name']?>"  placeholder="Name"/>
										<input type="email" name="email" value="<?=$row['email']?>"  placeholder="Email Address"/>
										<input type="text" name="password" value="<?=$row['password']?>"  placeholder="Password"/>
      <input type="hidden" value="<?=$id?>" name="id" />
      <button type="submit"  name="submit" class="btn btn-default">Signup</button>
									</form>
								</div><!--/sign up form-->
							</div>
						</div>
					</div>
				</section><!--/form-->

			</div>
		</div>
</section>
	<? include "inc/footer.php";?>
