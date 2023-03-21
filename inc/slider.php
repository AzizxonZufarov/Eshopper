	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
<?
$res2 = mysqli_query($con,"SELECT * FROM items");
$row2 = mysqli_fetch_assoc($res2);
$i = 0;

do{

	?>
				<div class="item <?if($i == 0){ echo 'active';}?>">



					<div class="col-sm-6">
						<a href="product-details.php?id=<?=$row2['id']?>"> <h1 ><span ><?=$row2['name']?></span></h1></a>
						<p><?=mb_substr(strip_tags($row2['description']), 0, 100, 'utf-8'). '...';?></p>
						<button type="button" class="btn btn-default get">Get it now</button>
					</div>
					<div class="col-sm-6">
						<img src="<?=$row2['img']?>" width="300px" height="100px" class="girl img-responsive" alt=""/>
					</div>
				</div>


 		<? $i++; }while($row2= mysqli_fetch_assoc($res2));?>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->
