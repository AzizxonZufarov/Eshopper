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
							<div class="col-sm-4 col-sm-offset-1">
								<div class="login-form"><!--login form-->
									<h2>Login to your account</h2>
									<form method="post" action="auth.php" >
										<input type="email" name="email" class="checkemail"  data-id="<?=$row['checkemail']?>"  placeholder="Email Address"/>
										<input type="password" name="password" class="checkpassword"  data-id="<?=$row['checkpassword']?>"  placeholder="Password"/>
										<span>
											<input type="checkbox" class="checkbox">
											Keep me signed in
										</span>
										<button type="submit"  name="submit" class="btn btn-default cabenter ">Login</button>
									</form>
								</div><!--/login form-->
							</div>
							<div class="col-sm-1">
								<h2 class="or">OR</h2>
							</div>
							<div class="col-sm-4">
								<div class="signup-form"><!--sign up form-->
									<h2>New User Signup!</h2>
									<form method="post" action="adduser.php">
										<input type="text" name="name"  placeholder="Name" class="name"  data-id="<?=$row['name']?>" />
										<input type="email" name="email"  placeholder="Email Address" class="email"  data-id="<?=$row['email']?>" />
										<input type="password" name="password"  placeholder="Password" class="password"  data-id="<?=$row['password']?>" />
										<button type="submit"  name="submit" class="btn btn-default submit">Signup</button>
									</form>
								</div><!--/sign up form-->
							</div>

						</div>
            <div class="col-sm-4">
								<h4 class="message"></h4>
							</div>
					</div>
          <div class="col-sm-12">
              <a href="cab.php" class="cablink"></a>
            </div>
        </div>


				</section><!--/form-->
			</div>
		</div>






</section>
	<? include "inc/footer.php";?>
