<!DOCTYPE html>
<html>
<head>
 
 <script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
 <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
 
<meta charset="utf-8" />
 <link rel="stylesheet" href="./style/index.css" />
 <link type="text/css" rel="stylesheet" href="./style/simplePagination.css"/>
 <script type="text/javascript" src="./js/index.js"></script>
 <script type="text/javascript" src="./js/jquery.simplePagination.js"></script>
<title>SHARA</title>
<link rel="shortcut icon" href="./img/favicon.ico" />
 
</head>
<body>
<?php 
	 include 'main/lib.php';
	 include 'main/mainheader.php';
?>
 
<!-- Начало хидер -->
<header class="header">
<div id="htop">
	<div class="headerInner">
	 <span>+16		
		 <span id="htopspanc">Получите приложение SHARA для IOS и Android к себе на телефон</span>
		 <span id="htopspanright"><div id="result" style="float: left; border-bottom: 2px dotted;">неопределен</div><img style="float: right; margin-left: 0.5em; margin-top: 0.1em;" src="./img/x.png"></img></span>
	 </span>
	</div>
	<div style="float: right;">
		<a id="vxod" href="./login.php">Войти</a>
	</div>
</div>
<div id="hinfo">
	<div class="headerInner" style=" border-color: white; border-left:1px solid; border-right: 1px solid;">
		<div style="float: left; height: 100%; width: 15%; border-right: 1px solid white;">
			<a href="#"><img style=" padding-top: 0.5em; width:115px; height:35px;" src="./img/logoS.png" alt="SHARA"/></a>
		</div>
		<div style="float: left; height: 100%; width: 45%; border-right: 1px solid white;">
			<nav class="topMenuRight">
				 <ul>
				 <li><a href="#">Товары</a></li>
				 <li><a href="#">Услуги</a></li>
				 <li><a href="#">Инфопродукты</a></li>
				 <li><a href="#">Еда</a></li>
				 </ul>
			</nav>
		</div>
		<div style="float: left; height:100%; width:5%; border-right: 1px solid white; text-align: center;">
				<div style="margin:0.5em; height: 70%; background: url(./img/kol.png) 50% 50% no-repeat;">
				
					<img style="display: none; margin-left: 25%; height: 15px; width: 25px; position: relative;" src="./img/kolCirkle.png">
						<p style="color: #222222; font-size: 10px; height:10px; width: 10px position: absolute;">
						<!-- количество новых уведомлений -->
						
						
						
						</p>
					</img>
				</div>
		</div>
		<div style="float: left; height:100%; width:10%;text-align: center; border-right: 1px solid white;">
			<div style="margin-top: 0.8em;"><span style="margin-top: 0.8em; font-size: 0.8em; ">баллы: <b>
			<!-- вставить балы пользователя -->
			800
			
			</b></span></div>
		</div>
		<div  style="float: left; height:100%; width: 24%;">
			<div>
				<div style="float: left; margin-left: 1em; margin-top: 0.8em; width: 40%; height:40%; background: white; text-align: center; color: #333;"><b>
				<!-- вставить тип акаунта пользователя -->
				premium
				
				</b></div>
				<div style="float:right; margin: 2px;">
					<div style="float: left;  height:40px; width: 40px; text-align: center;  background: white; border-radius: 50%;">
						<div style=" margin:5px; height:30px; width: 30px;  background: white; border-radius: 50%;">
						<!-- вставить ссылку на фото пользователя -->
						</div>
					</div>
					<div style="float:right; padding-top: 0.5em; padding-left: 0.5em;">
						<img style="height: 10px; width: 15px;" src="./img/strel.png"></img>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="hnav">
	<div class="headerInner" style="border-left:1px solid #757575; border-right: 1px solid #757575;">
		 <nav class="navigation">
 
			 <ul>
				 <li>	
					<div style="margin-top: 0.4em;">	
						<a href="#">Еда</a>
						<img src="./img/strel.png"></img>
					</div>
				 </li>
				 <li>
					<div style="margin-top: 0.4em;">	
						<a href="#">Развлечение и спорт</a>
						<img src="./img/strel.png"></img>
					</div>
				 </li>
				 <li>
					<div style="margin-top: 0.4em;">	
						<a href="#">Красота и уход</a>
						<img src="./img/strel.png"></img>
					</div>
				 </li>
				 <li>
					<div style="margin-top: 0.4em;">	
						<a href="#">Медецина</a>
						<img src="./img/strel.png"></img>
					</div>
				 </li>
				 <li style="border-right: none;">
					<div style="margin-top: 0.4em;">	
						<a href="#">Образование</a>
						<img src="./img/strel.png"></img>
					</div>	
				 </li>
			 </ul>
		 
		</nav>
	</div>
</div>
</header><!-- Конец хидер -->
 
<!-- начало врапер -->
 
<section id="wrapper">

	<div class="headerInner">
		<div id="shares">
			<span style="margin-top: 0.2em; font-size: 2em; color: #4c4c4c; float: left;">Все акции дня </span>
			<div style="margin-left: 1em; float: left; height:40px; width: 40px; text-align: center; color: white; background: #222222; border-radius: 50%;">
				<p style="margin: 8px;">
				<!-- количество акций -->
				9</p>
			</div>
			<div style="float: right;">
				<input type="button" value="Список" style="border-radius: 10px 0 0 10px; background: url(./img/spisok.png) 2% 50% no-repeat; background-color: #7abd2c;" ></input>
				<input type="button" value="Товар онлайн"></input>
				<input type="button" value="Карта" style="border-radius: 0 10px 10px 0; background: url(./img/mapL.png) 90% 50% no-repeat; background-color: white; color:#333;"></input>
			</div>
		</div>
		<div id="ads">
			<ul id="listul">
				<li id="listlip" style="margin-left: 2%;">
					
				</li>
							
			</ul>
		</div>
		<div id="light-pagination" class="pagination"></div>
	</div><!-- Конец мидл -->
</section><!-- Конец врапер -->
 
<script type="text/javascript" src="./js/initindex.js"></script>
 
<!-- Начало футер -->
 
<footer id="footer">
	<div id="footerInner">
		 <nav class="footernav">
			<ul>
			 <li>
				<a href="#">Компания</a>
				 <a class="podfooter" href="#">Вакансия</a>
				 <a class="podfooter" href="#">Контакты</a>
				 <a class="podfooter" href="#">Оферта</a>
				 <a class="podfooter" href="#">O конфеденцеальности</a>
				 <a class="podfooter" href="#">Блог</a>
				
			 </li>
			 <li>
				<a href="#">Компания</a>
				<a class="podfooter" href="#">Узнать больше</a>
				<a class="podfooter" href="#">FAQ</a>
				<a class="podfooter" href="#">Пресса</a>
				<a class="podfooter" href="#">Партнерам</a>
				<a class="podfooter" href="#">Логотип Works</a>
			 </li>
			 <li>
				<a href="#">Дополнительно</a>
				<a class="podfooter" href="#">Подарочные карты</a>
			 </li>
			 <li style=" margin-left:1%; width: 48%; font-size: 11px; color: #757575; word-break: break-all;">
				<p>Логотип - это акции и купоны на рестораны, маникюр, массаж, обучение,
				развлечения, путишествия, шопинг и многое другое.
				</p>
				<p>
					Регистрируйтесь и получайте новости о лучших акциях на товары и услуги
					в Москве! Купить купон можно на нашем сайте круглосуточно где бы вы ненаходились.
					Выбирайте лучшее! Лучшие цены, лучшие услуги, лучшее качество. Для этого достаточно купить купон по акции на Groupon.
				</p>
			 </li>
			</ul>
		 
		</nav>
	</div><!-- Конец футериннер -->
</footer><!-- Конец футер -->
 
</body>
</html>

