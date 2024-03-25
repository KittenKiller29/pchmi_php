<?php session_start(); ?>
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
						Автор
						</div>
						<input type="text" id="name1" name="name1" size="20">
						<div class='headtxt'>
						Название
						</div>
						<input type="text" id="name2" name="name2" size="20">
						<div class='headtxt'>
						Жанр
						</div>
						<input type="text" id="name3" name="name3" size="20">
						<div class='diap'>
							<div class='headtxt'>
								Цена
							</div>
							<div class='box'>
								<div class='headtxt2'>
									От
								</div>
								<input type="text" id="name4" name="name4" size="2">
								<div class='headtxt2'>
									До
								</div>
								<input type="text" id="name5" name="name5" size="2">
							</div>
							<div class='searchbut' id='searchb'> Найти</div>
						</div>
					</div>
					<div class='rec'>
						<div class='headtxt'>
							Также рекомендуем
						</div>
						<div class='recitem'>
							<div class='item' style="background-image: url(/nr.jpg);"> </div>
							<div class='txt'> Хроники Нарнии Лев, Колдунья и Платяной Шкаф была закончена в 1949 году и опубликована в 1950. В ней рассказывается история о четырех обычных детях (Питер, Сьюзен, Эдмунд и Люси). Они находят платяной шкаф в доме профессора Керка, который ведет в волшубную страну Нарнию, находящуюся под заклятьем злой Белой Колдуньи. 
							</div>
						</div>
						<div class='recitem'>
							<div class='item' style="background-image: url(/hg.jpg);"> </div>
							<div class='txt'> Голодные игры. Первая часть трилогии, написанной американской писательницой Сьюзен Коллинс. Действия происходят в антиутопии будущего, где дети из разных дистриктов Панэма должны сражаться на арене. 
							</div>
						</div>
					</div>
					</div>
					<div class='headtxt'>
						Результаты поиска
					</div>
					<div class='listview' id='lv'>
						<div class='headtxt'>
							Ничего не найдено :(
						</div>
					</div>
			</div>
		</div>
		</div>
		<script src='main.js'></script>
		<script src='search.js'></script>
	</body>
</html>