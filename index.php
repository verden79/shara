<!DOCTYPE html>
<html>
<head>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 
<meta charset="utf-8" />
 <link rel="stylesheet" href="./style/index.css" />
<title>Макет</title>
 
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
			<div style="margin-top: 0.8em;"><span  id="bbal" style="margin-top: 0.8em; font-size: 0.8em; ">баллы: <b>
			<!-- вставить балы пользователя -->
			
			
			
			</b></span></div>
		</div>
		<div  style="float: left; height:100%; width: 24%;">
			<div>
				<div style="float: left; margin-left: 1em; margin-top: 0.8em; width: 40%; height:40%; background: white; text-align: center; color: #333;font-size: 0.8em;"><b>
				      <?php 
					      if  (!isset($us))  echo '<a href=\'login.php\'> Регистрация/Вход </a>';

				      ?>	
				
				</b></div>
				<div style="float:right; margin: 2px;">
					<div style="float: left;  height:40px; width: 40px; text-align: center;  background: white; border-radius: 50%;">
						<div style=" margin:5px; height:30px; width: 30px;  background: white; border-radius: 50%;">
						<!-- вставить ссылку на фото пользователя -->
							<?php 	
							   if  (isset($us->bonus)) echo '<img src = '.$us->bonus.'>'; 
							?>

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
				<?php
				  if  (isset($shara->akcia)) echo $shara->bonus;
				  	 else echo 9; 
				 ?>
				</p>
			</div>
			<div style="float: right;">
				<input type="button" value="Список" style="border-radius: 10px 0 0 10px; background: url(./img/spisok.png) 2% 50% no-repeat; background-color: #7abd2c;" ></input>
				<input type="button" value="Товар онлайн"></input>
				<input type="button" value="Карта" style="border-radius: 0 10px 10px 0; background: url(./img/mapL.png) 90% 50% no-repeat; background-color: white; color:#333;" onclick="bon(jsvt)"></input>
			</div>
		</div>
		<div id="ads">
			<ul>
				<li style="margin-left: 0;">
					<div id="one">
						<p>
						<!-- описание товара или акции -->
						Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов</span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>
							<!-- вставить скиндку на товар -->
							10 000 руб
							</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">
							<!-- адрес акции -->
							м. Выставочная
							</p>
							<p style="margin-right: 0.5em; float: right;">купили 
							<!-- количество покупок этой акции -->
							5900
							+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 
							<!-- фейковая цена -->
							22290

							руб.</del>
							<p style="margin-right: 0.5em; color:#6ca33a; float: right;"><b>от 
							<!-- придложенная цена -->
							10 000
							руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">
									<!-- количество балов,которые можно заработать -->
									300

									бал</p>
								</div>
								<p>Остаток: 
								<!-- текущая сумма -->
								18 000 
								руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li style="margin-left: 0;">
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li style="margin-left: 0;">
					<div id="one">
						<p>
						<!-- описание товара или акции -->
						Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов</span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>
							<!-- вставить скиндку на товар -->
							10 000 руб
							</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">
							<!-- адрес акции -->
							м. Выставочная
							</p>
							<p style="margin-right: 0.5em; float: right;">купили 
							<!-- количество покупок этой акции -->
							5900
							+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 
							<!-- фейковая цена -->
							22290

							руб.</del>
							<p style="margin-right: 0.5em; color:#6ca33a; float: right;"><b>от 
							<!-- придложенная цена -->
							10 000
							руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">
									<!-- количество балов,которые можно заработать -->
									300

									бал</p>
								</div>
								<p>Остаток: 
								<!-- текущая сумма -->
								18 000 
								руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить" ></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="./img/star1.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<img src="./img/star.png" ></img>
						<span>15 отзывов </span>
					</div>
					<div id="three">
						<div id="skidka">
							<p>скидка до: <p><b>10 000 руб</b></p></p>
						</div>
						<div id="metro">
							<p style="margin-left: 0.5em; float: left;">м. Выставочная</p>
							<p style="margin-right: 0.5em; float: right;">купили 5900+ чел</p>
						</div>
					</div>
					<div id="fo">
						<div id="buyinfo">
							<del style="margin-left: 0.5em; float: left; font-size: 12px; text-decoration: ">от 22290 руб.</del>
							<p style="margin-right: 0.5em; color:#53AF2D; float: right;"><b>от 10 000 руб.</b></p>
						</div>
						
						<div id="buy">
							<div id="bleft">
								<div>
									<p style="float: right; margin-right: 0.3em; margin-top: 0.5em;">300 бал</p>
								</div>
								<p>Остаток: 18 000 руб.</p>
							</div>
							<div id="bright">
								<input type="button" value="Оплатить"></input>
							</div>
						</div>
					</div>
					<div id="five">
						<span>Подробнее</span>
					</div>
				</li>
				
				
			</ul>
		</div>
	</div><!-- Конец мидл -->
</section><!-- Конец врапер -->
 
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
 
 <?php $mysqli->close(); ?>
  <script src="scripts/index.js"></script>

</body>
</html>