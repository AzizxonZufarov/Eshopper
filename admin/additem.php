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
									<h2>Add ITEM</h2>
                  <?
                  $id = $_GET['id'];
                  $res = mysqli_query($con,"SELECT * FROM category");
	
				   $row = mysqli_fetch_assoc($res);?>
									<form action="additem2.php" method="post"  enctype="multipart/form-data" >
										<input type="name" name="name"  placeholder="Name"/>
										<input type="text" name="price"  placeholder="price"/>
										<label>Category</label>
										<select name="category">
										<?do{?>	
													<option value="<?=$row['id']?>"><?=$row['name']?></option>
							             <? }while($row = mysqli_fetch_assoc($res));?>
										</select>	<br/>	
											<label>File</label>						
                   						 <input type="file" name="img"/>
                    					<div class="cleaner_h10"></div>
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
