<?php 
	session_start(); 
	include("bagloader.php");
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
					<div class='sb'>
						<div class='form'>
							<div class='headtxt'>
								Позиции заказа
							</div>
							<div class='bagcollect' id='bc'>
								<?php
									for($i=0;$i<count($row1);$i++){
										echo '<div class="bagelem" style="background-image:url('.$row1[$i]['img'].');"> 
											
										</div>';
									}
								?>
								
							</div>
						</div>

					<div class='bagitem'>
						<div class='headtxt8'>
							Личные данные
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div class='headtxt9'>
							ФИО
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div class='headtxt9'>
							Телефон
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div class='headtxt9'>
							Почта
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div class='headtxt9'>
							Адрес
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div>
							<?php
								$sum=0;
								if(count($row1)!=0){
									foreach($row1 as $key => $value){
										$sum+=$row1[$key]['cost'];
									}
									echo '<div class="headtxt9">Итого к оплате-';
									echo $sum;
									echo 'руб</div>';
									echo '<div class="ubtn" id="bbtb">
										Оплатить </div>';
								}
							?>
						</div>
						
					</div>


					</div>
					
				</div>
			</div>
		</div>
		
		<script src='main.js'></script>
		<script src='remover.js'></script>
		
	</body>

</html>