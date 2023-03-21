<? include "inc/bd.php";?>
<?php
?>

<? include "inc/header.php";?>


<section id="cart_items">
  <div class="container">
                  <div class="row">
                    <? $id = $_GET['id'];

                  $res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

                  $row = mysqli_fetch_assoc($res);?>
                      <form action="upduser.php" method="post">
                          <div class="col-sm-12">

                            <label>User Name</label>

                          <input type="text" name="name" value="<?=$row['name']?>"><br />

                            <label>User email</label>
                          <input type="text" name="email" value="<?=$row['email']?>"><br />
                                  <label>User password</label>
                              <input type="text" name="password" value="<?=$row['password']?>"><br />
Admin
                              <input type="radio"  name="admin" value="1" ><br />
                            User
                              <input type="radio"  name="admin" value="0" ><br />

                              <input type="hidden" name="id" value="<?=$id?>" />
                              <input type="submit" name="submit" value="Edit" class="btn btn-primary" />
                            </div><!--/Repaly Box-->
                    </form>
              </div>
            </div>

    </section> <!--/#cart_items-->
