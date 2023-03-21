<?php
!isset($_SESSION)? session_start():'';
  #    ######### Выводим все ошибки ##########    #
  ini_set('error_reporting', E_ALL & ~E_NOTICE);    #
  ini_set('display_errors', -1);             #
  ini_set('display_startup_errors', -1);        #
  error_reporting(E_ALL & ~E_NOTICE);          #
  #    ######### Выводим все ошибки ##########    #
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>
<? include "inc/slider.php";?>



 <style>

.button {
    color: #ffffff;
    font-size: 30px;
    margin: 0 auto;
    display: block;
    text-decoration: none;
    text-align: center;
    padding: 20px 50px;
    background: #36779A;
    max-width: 300px;
}

.popup-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    display: none;
}

.popup {
    position: absolute;
    background: #ffffff;
    width: 400px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 30px;
    padding-top: 60px;
}

.popup form {
    display: flex;
    flex-direction: column;
}

.popup form input {
    margin-bottom: 30px;
    height: 50px;
    font-size: 20px;
    border: 2px solid #000000;
}

.popup form input[type="submit"] {
    background: #000000;
    color: #ffffff;
    font-size: 24px;
}

.close-popup {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
 	height: 25px;
}

.no-scroll {
    overflow-y: hidden;
}
</style>

<section>

		<div class="container">
			<div class="row">

				<? include "inc/left.php";?>


			<div class="col-sm-9 padding-right cats-item">
					<div class="features_items"><!--features_items-->
<?
$per_page = 6;
$page = 1;
if( isset($_GET['page'])) {
$page = (int)$_GET['page'];
}
$id = $_GET['id'];
$total_count_q = mysqli_query($con,"SELECT COUNT(`id`) as `total_count` FROM `items`");

$total_count=mysqli_fetch_assoc($total_count_q);

$total_count=$total_count['total_count'];
$total_pages = ceil($total_count / $per_page);

if ($page <= 1 || $page > $total_pages) {
$page = 1;
}

$offset=($per_page * $page)-$per_page;



						 include "cats.php";?>

					</div><!--features_items-->

<?php
if( $articles_exist == true)
{?>
	<div class="pagination-area">
		<ul class="pagination">

			   <?if($page > 1)
				 {?>
					<li><a href="index.php?page=<?=$page - 1?>"><i class="fa fa-angle-double-left"></i>Прошлая страница</a></li>
<?}
				 if($total_pages != 1){
					 for ($i = 1; $i <=$total_pages; $i++){?>
						<li><a href="index.php?page=<?=$i?>" class="<? if($i == $page){ echo 'active';}?>"><?=$i?></a></li>
					<?} }else {
						 echo "Пагинации нет!";
					 }
			   if($page < $total_pages){
				 ?>
				  <li><a href="index.php?page=<?=$page + 1?>">Следующая страница<i class="fa fa-angle-double-right"></i></a></li>
<?}?>				</ul>
			</div>
				 <?	}?>

			</div>

      <!--divider-->
			<div class="col-sm-9 padding-right brands-item">
					<div class="features_items"><!--features_items-->
<?
$per_page = 6;
$page = 1;
if( isset($_GET['page'])) {
$page = (int)$_GET['page'];
}
$id = $_GET['id'];
$total_count_q = mysqli_query($con,"SELECT COUNT(`id`) as `total_count` FROM `items`");

$total_count=mysqli_fetch_assoc($total_count_q);

$total_count=$total_count['total_count'];
$total_pages = ceil($total_count / $per_page);

if ($page <= 1 || $page > $total_pages) {
$page = 1;
}

$offset=($per_page * $page)-$per_page;



						 include "brands.php";?>

					</div><!--features_items-->

<?php
if( $articles_exist == true)
{?>
	<div class="pagination-area">
		<ul class="pagination">

			   <?if($page > 1)
				 {?>
					<li><a href="index.php?page=<?=$page - 1?>"><i class="fa fa-angle-double-left"></i>Прошлая страница</a></li>
<?}
				 if($total_pages != 1){
					 for ($i = 1; $i <=$total_pages; $i++){?>
						<li><a href="index.php?page=<?=$i?>" class="<? if($i == $page){ echo 'active';}?>"><?=$i?></a></li>
					<?} }else {
						 echo "Пагинации нет!";
					 }
			   if($page < $total_pages){
				 ?>
				  <li><a href="index.php?page=<?=$page + 1?>">Следующая страница<i class="fa fa-angle-double-right"></i></a></li>
<?}?>				</ul>
			</div>
				 <?	}?>

			</div>


		</div>

</section>



	<? include "inc/footer.php";?>
