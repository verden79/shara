<!DOCTYPE html>
<html>
<head>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 
<meta charset="utf-8" />
 <link rel="stylesheet" href="./style/index.css" />
<title>Регистрация</title>
 
</head>
<body>
 
<!-- Начало хидер -->
<?php 
	 include '/main/lib.php';
	 include '/main/header.php';
?>

<header class="header">
<div id="htop">
	<div class="headerInner">
	 <span>+16		
		 <span id="htopspanc">Получите приложение SHARA для IOS и Android к себе на телефон</span>
		 <span id="htopspanright"><div style="float: left; border-bottom: 2px dotted;">Москва</div><img style="float: right; margin-left: 0.5em; margin-top: 0.1em;" src="./img/x.png"></img></span>
	 </span>
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
	<div class="headerInner">
		 <nav class="navigation">
 
			 <ul>
				 <li>	
					<a href="#">Еда</a>
					<img src="./img/strel.png"></img>
				 </li>
				 <li>
					 <a href="#">Развлечение и спорт</a>
					 <img src="./img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Красота и уход</a>
					<img src="./img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Медецина</a>
					<img src="./img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Образование</a>
					<img src="./img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Услуги</a>
					<img src="./img/strel.png"></img>
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
		<div id="register">
			<div id="regform">
				<div id="dvform">
					<h2>Регистрация</h2>
					<form method="Post"  action="main/reguser.php">
						<input class="tbin" type="text" placeholder="Логин" name="flogin"></input>
						<input class="tbin" type="text" placeholder="Емайл" name="femail"></input>
						<input class="tbin" type="password" placeholder="Пароль" name="fpass"></input>
						<input class="tbin" type="password" placeholder="Повторите пароль" name="fpass2"></input>
						<input class="tbin" type="text" placeholder="Вас пригласил" name="fpid"></input>
						<input id="btsub" type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ"></input>
						
						<!-- <h3><a  href="#"> ЗАБЫЛИ ПАРОЛЬ?</a></h3> -->

					</form>
				</div>
			</div>
		
		</div>
	</div><!-- Конец хидер инер -->
</section><!-- Конец врапер -->
 
<?php $mysqli->close(); ?>
 
</body>
</html>