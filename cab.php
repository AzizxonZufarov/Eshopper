<?php
include "inc/bd.php";
session_start();

?>

<? include "inc/header.php";?>
<section>
		<div class="container">
			<div class="row">
 <?
$id = $_SESSION['id'];
$res = mysqli_query($con,"SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>

 <h2 align="center">Добро пожаловать, <?=$row['name']?></h2>


 <table align="center" border="1" width="400" height="100">

 			<tr>
 					<td align="center">Name</td>
 					<td align="center">Password</td>
 					<td align="center">Email</td>
 					<td colspan="2" align="center">Действия</td>
 			</tr>
 			<tr>
 					<td align="center"><?=$row['name']?></td>
 					<td align="center"><?=$row['email']?></td>
 					<td align="center"><?=$row['password']?></td>
 					<td align="center"><a href="editcab.php?id=<?=$row['id']?>">Редактировать</a></br></td>
 					<td align="center"><a href="dellcab.php?id=<?=$row['id']?>">Удалить</a></br></td>

 			</tr>

 </table>

</div>
</div><br />
<?

if($row['isAdmin'] == '1'){?>
	<section id="cart_items">
		<div class="container">
			<div class="row">
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td  class="image"><a style="color: white;" href="admin/">Панель Администратора</a></td>
							</tr>
						</thead>
										</table>
									</div>
			</div>

						</div>
</section>
					<?}?>
					<br />
					<section id="cart_items">
						<div class="container">
							<div style="" class="row">
								<div class="table-responsive cart_info">
									<table class="table table-condensed">
										<thead>
											<tr class="cart_menu">
												<td  class="image"><a style="color: white;" href="logout.php">Exit</a></td>
											</tr>
										</thead>
														</table>
													</div>
							</div>

										</div>
				</section>
</section>



	<? include "inc/footer.php";?>
