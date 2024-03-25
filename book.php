<?php
	session_start();
	include("bookloader.php");
?>
<!DOCTYPE html>
<html>	
	<head>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>

	<body>
		<div class='header'>
			<div class='box'>
				<div class='mainlogo' id='home'>
				</div>
				<div class='search' id='search'>
					<div class='box1'>
						<div class='mem'>
							Поиск
						</div>
					</div>
					<div class='iconsearch'>
					</div>
				</div>
				<div class='find' id='bag'>
					<div class='box2'>
						<div class='mem'>
							Корзина
						</div>
					</div>
					<div class='iconbag'>
					</div>
				</div>
			</div>
		</div>
		<div class='mainbox'>
			<div class='box'>
				<div class='subbox'>
					<div class='sb' id='sb'>
						<?php echo '<div class="bigbook" style="background-image:url('.$row['img'].');"> </div>'; ?>
					<div class='aboutbook'>
						<div class='headtxt1'>
							<?php
								echo $row['bname'];
							?>
						</div>
						<div class='aboutbook2'>
							<?php
								echo $row['author'];
								echo ' ,';
								echo $row['tag'];
							?>
						</div>
						<div class='aboutbook3'>
							<?php
								echo $row['about'];
							?>
						</div>
						<div class='aboutbook4'>
							<?php
								echo 'Доступно к покупке за ';
								echo $row['cost'];
								echo ' руб';
							?>
						</div>
						<div class='bbtn' id='bbtn'>
							Добавить в корзину
						</div>
						
						
					</div>
					</div>
					<div class='headtxt1' style="margin-top:50px;">
						Отзывы
					</div>
					<?php
						for($i=0;$i<count($row1);$i++){
							echo '<div class="response">
									<div class="aboutbook5">
										Отзыв №';
							echo $i+1;
							echo	'</div>
									<div class="headtxt7">';
							echo $row1[$i]['response'];			
							echo	'</div>
							 	  	</div>';
						}
					?>
				</div>
			</div>
		</div>
		<script src='main.js'></script>
		<script src='book.js'></script>
	</body>
</html>