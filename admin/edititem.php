<? include "inc/bd.php";?>
<?php
?>

<? include "inc/header.php";?>



<section id="cart_items">
  <div class="container">
                  <div class="row">
                    <? $id = $_GET['id'];

             			$res = mysqli_query($con,"SELECT * FROM items WHERE id = $id");

             			$row = mysqli_fetch_assoc($res);

                  ?>

                      <form action="upditem.php" method="post">
                          <div class="col-sm-12">
                          <div >
                            <label>Item Name</label>
                          </div>
                          <input type="text" name="name" value="<?=$row['name']?>">
                          <div >
                            <label>Item Price</label>
                          </div>
                          <input type="text" name="price" value="<?=$row['price']?>">
                          <div ><br />
                            <label>Item Category</label>
                          </div>
						<select name="category">

						<? $res1 = mysqli_query($con,"SELECT * FROM category");
                             $row1 = mysqli_fetch_assoc($res1);
            do{?>
							<option  value="<?=$row1['id']?>"><?=$row1['name']?></option>
            <? }while($row1 = mysqli_fetch_assoc($res1));?>
						</select>	<br/>

                          <br />
                          <label>Item image</label> <input type="file" placeholder="<?=$row['img']?>" name="img" >
                            <div class="text-area">
                              <input type="hidden" name="id" value="<?=$id?>" />
                              <input type="submit" name="submit" value="Edit" class="btn btn-primary" />
                            </div>
                            </div><!--/Repaly Box-->
                    </form>
              </div>
            </div>

    </section> <!--/#cart_items-->
