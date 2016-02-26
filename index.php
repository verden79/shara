<!DOCTYPE html>
<html>
<head>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 
<meta charset="utf-8" />
 <link rel="stylesheet" href="style/index.css" />
<title>Макет</title>
 
</head>
<body>
	<?php 
	 include '/main/lib.php';
	   
	       session_start();

		   $mysqli = new BaseUsers();
		   
		   if (isset($_SESSION['id'])) 
		   	{ 
		   		if ($us = $mysqli->isUserId($_SESSION['id']))
			 		{
			    		$name = $us->login;
			    		$bal = $us->bonus;	
					$ttt = ' <a href = \'/main/cab.php\' >Пользователь -'.$name . '</a>';
					}
		   	}
		   	else 
		   		{  	$ttt = '<a href =\'main/check.php\'>Регистрация/Вход </a>'; }
	 

	?>


 
<!-- Начало хидер -->
<header class="header">
<div id="htop">
	<div class="headerInner">
	 <span>+16		
		 <span id="htopspanc">Получите приложение LOGO для IOS и Android к себе на телефон</span>
		 <span id="htopspanright"><div style="float: left; border-bottom: 2px dotted;">Москва</div><img style="float: right; margin-left: 0.5em; margin-top: 0.1em;" src="img/x.png"></img></span>
	 </span>
	</div>
</div>
<div id="hinfo">
	<div class="headerInner" style=" border-color: white; border-left:1px solid; border-right: 1px solid;">
		<div style="float: left; height: 100%; width: 15%; border-right: 1px solid white;">
			<a href="#"><img style=" padding-top: 0.5em; width:115px; height:35px;" src="/img/logoS.png" alt="SHARA"/></a>
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
				<div style="margin:0.5em; height: 70%; background: url(/img/kol.png) no-repeat;">
				
					<img style="margin-left: 25%; height: 15px; width: 25px;" src="/img/kolCirkle.png"></img>
				</div>
		</div>
		
		<div style="float: left; height:100%; width:10%;text-align: center; border-right: 1px solid white;">
		   
		<!-- окошко для вывода информации -->   
	    	<div style="margin-top: 0.8em;"><span style="margin-top: 0.8em; font-size: 0.8em; ">баллы: 
	    			  <b>  
	    	             <?php 
	    	                $us->bonus;  // вывод балов
	    	              ?>
	    	          </b></span></div>
			</div>
  		
     		<div  style="float: left; height:100%; width: 24%;">
			<div>
				<div style="float: left; margin-left: 1em; margin-top: 0.8em; width: 40%; height:40%; background: white; text-align: center; color: #333;"><b>premium</b></div>
				<div style="float:right; margin: 2px;">
					<div style="float: left;  height:40px; width: 40px; text-align: center;  background: white; border-radius: 50%;">
						<div style=" margin:5px; height:30px; width: 30px;  background: blue; border-radius: 50%;"></div>
					</div>
					<div style="float:right; padding-top: 0.5em; padding-left: 0.5em;">
						<img style="height: 10px; width: 15px;" src="/img/strel.png"></img>
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
					<img src="img/strel.png"></img>
				 </li>
				 <li>
					 <a href="#">Развлечение и спорт</a>
					 <img src="img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Красота и уход</a>
					<img src="img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Медецина</a>
					<img src="img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Образование</a>
					<img src="img/strel.png"></img>
				 </li>
				 <li>
					<a href="#">Услуги</a>
					<img src="img/strel.png"></img>
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
			<span style="margin-top: 0.2em; font-size: 2em; color: darkgray; float: left;">Все акции дня </span>
			<div style="margin-left: 1em; float: left; height:40px; width: 40px; text-align: center; color: white; background: #333; border-radius: 50%;">
				<p style="margin: 8px;">496</p>
			</div>
			<div style="float: right;">
				<input type="button" value="Список" style="border-radius: 10px 0 0 10px; background: url(img/spisok.png) 2% 50% no-repeat; background-color: #53AF2D;" ></input>
				<input type="button" value="Товар онлайн"></input>
				<input type="button" value="Карта" style="border-radius: 0 10px 10px 0; background: url(img/mapL.png) 90% 50% no-repeat; background-color: white; color:#333;"></input>
			</div>
		</div>
		<div id="ads">
			<ul>
				<li style="margin-left: 0;">
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<span>15 отзывов</span>
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
						<span>подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
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
						<span>подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
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
						<span>подробнее</span>
					</div>
				</li>
				<li style="margin-left: 0;">
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
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
						<span>подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
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
						<span>подробнее</span>
					</div>
				</li>
				<li>
					<div id="one">
						<p>Билеты в детский город мастром "Мастерславль". <p style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">Возможность детям попробовать себя<p></p>
					</div>
					<div id="two">
						<img src="img/star1.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
						<img src="img/star.png" ></img>
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
						<span>подробнее</span>
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
 <li><a href="#">Страница 1</a></li>
 <li><a href="#">Страница 2</a></li>
 <li><a href="#">Страница 3</a></li>
 <li><a href="#">Страница 4</a></li>
 </ul>
 
</nav>
</div><!-- Конец футериннер -->
</footer><!-- Конец футер -->
 
<?php 

$mysqli->close();

?>

</body>
</html>