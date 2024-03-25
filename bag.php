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
								Вы выбрали:
							</div>
							<div class='bagcollect' id='bc'>
								<?php
									for($i=0;$i<count($row1);$i++){
										echo '<div class="bagelem" style="background-image:url('.$row1[$i]['img'].');"> 
											<div class="hp">
												<div>
													Цена-';
													echo $row1[$i]['cost'];
													echo ' руб';
													echo
												'</div>

												<div class="aaa"  id="'.$row1[$i]['idbooks'].'">
												Удалить
												</div>
											</div>
										</div>';
									}
								?>
								<div class="bagelem" style="background-image:url(/plus.png);"> 
								</div>
							</div>
						</div>

					<div class='bagitem'>
						<div class='headtxt8'>
							Ваша корзина
						</div>
						<div >
							<?php
								$sum=0;
								if(count($row1)!=0){
									foreach($row1 as $key => $value){
										$sum+=$row1[$key]['cost'];
									}
									echo 'Итого к оплате: ';
									echo $sum;
									echo 'руб';
								}
							?>
						</div>
						<div class='ubtn' id='bbtb'>
							Оплатить
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