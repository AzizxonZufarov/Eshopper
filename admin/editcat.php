<? include "inc/bd.php";?>
<?php
?>

<? include "inc/header.php";?>


<section id="cart_items">
  <div class="container">
                  <div class="row">
                    <? $id = $_GET['id'];

             			$res = mysqli_query($con,"SELECT * FROM category WHERE id = $id");

             			$row = mysqli_fetch_assoc($res);?>
                      <form action="updcat.php" method="post">
                          <div class="col-sm-12">
                          <div class="blank-arrow">
                            <label>Category Name</label>
                          </div>
                          <span>*</span>
                          <input type="text" name="name" value="<?=$row['name']?>">
                            <div class="text-area">
                              <input type="hidden" name="id" value="<?=$id?>" />
                              <input type="submit" name="submit" value="Edit" class="btn btn-primary" />
                            </div>
                            </div><!--/Repaly Box-->
                    </form>
              </div>
            </div>

    </section> <!--/#cart_items-->
