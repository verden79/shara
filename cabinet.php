0<!DOCTYPE html>
<html>
<head>
 
 <script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
 <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
 
<meta charset="utf-8" />
 <link rel="stylesheet" href="./style/index.css" />
 <script type="text/javascript" src="./js/index.js"></script>
<title>Кабинет</title>
<link rel="shortcut icon" href="./img/favicon.ico" />
 
</head>
<body>
 <?php 
	 include 'main/lib.php';
	 include 'main/header.php';
?>


<header class="header">
<div id="htop">
	<div class="headerInner">
	 <span>+16		
		 <span id="htopspanc">Получите приложение SHARA для IOS и Android к себе на телефон</span>
		 <span id="htopspanright"><div id="result" style="float: left; border-bottom: 2px dotted;">неопределен</div><img style="float: right; margin-left: 0.5em; margin-top: 0.1em;" src="./img/x.png"></img></span>
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
			<div id="plain" style=""><span style="font-size: 0.8em; ">баллов:<b id="bal">
			<!-- вставить балы пользователя -->
			800
			
			</b></span></div>
			<div id="noplain" style="display: none;">
				<a id="nedobal" href="#">
					<span style="font-size: 0.8em; color: red; "> 
						<b id="bal">
						<!-- вставить балы пользователя -->
						125
						
						</b>
					</span>
					<span class="over">При активном примиум аккаунте получили бы больше баллов.</span>
				</a>
			</div>
		</div>
		<div  style="float: left; height:100%; width: 24%;">
			<div>
				<div style="float: left; margin-left: 1em; margin-top: 0.8em; width: 40%; height:40%; background: white; text-align: center; color: #333;"><b id="akk">
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

	<div class="wrapperinner">

		<div class="wrapperinnerleft">
			<div id="referal">
				<div id="ref1lvl" class="reflvl">
					<section>
						<p>Рефералы</p>
					</section>
					<div class="reflist">
						<ul id="lisreferal1">
							<li id="lisreferal1li" onclick="ClikForList(this)">
							
								
								
							</li>
						</ul>
						<span>Ддля того чтоб пригласить друзей передайте им эту ссылку: 
					   <?php			
						
						   if ($idz > 1 ) {
							                  $sss = 'http://12shara.ru/register.php?ida='.$idz; 
 							   				  	echo "<a href = $sss> $sss </a>";		
 							   				  } else echo 'xxx'	;
 					   ?>
 					    </span>

					</div>
				</div>
				<div id="ref2lvl" class="reflvl">
					<section style="border:0;">
						<p style="visibility: hidden;">Рефералы</p>
					</section>
					<div style="height: 2em; border-top: 1px solid #dadddf; margin-bottom: 1em;">
						<span id="btref2" class="btreflev"><b>2 уровень</b></span>
					</div>
					<div class="reflist">
					
					
						<ul id="lisreferal2">
							<li id="lisreferal2li" onclick="Clik2ForList(this)">

							</li>
							
							
						</ul>
					</div>
				</div>
				
				<div id="ref3lvl" class="reflvl">
					<section style="border:0;">
						<p style="visibility: hidden;">Рефералы</p>
					</section>
					<div style="height: 2em; border-top: 1px solid #dadddf; margin-bottom: 1em;">
						<span id="btref3" class="btreflev"><b>3 уровень</b></span>
					</div>
					<div class="reflist">
					
						<ul id="lisreferal3">
							<li id="lisreferal3li" onclick="Click3ForList(this)">

							</li>
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div class="wrapperinnerright">
			<div class="userinfo">
				<div id="user">
					<div id="foto">
						<img id="fotos"></img>
					</div>
					<h1 id="nameprof">none</h1>
					<h4 id="mailprof">no</h4>
				</div>
				<div id="like">
					<img src="./img/star1.png"></img>
					<img src="./img/star.png" ></img>
					<img src="./img/star.png" ></img>
					<img src="./img/star.png" ></img>
					<img src="./img/star.png" ></img>
					<span id = "otzuv">15 отзывов</span>
				</div>
				<div id="infoprof">
					<ul>
						<li>
							<img src="./img/phone.png"></img>
							<p  id="phoneprof"style="margin-left: 3em;">+7260000000</p>
						</li>
						<li>
							<img src="./img/phone.png"></img>
							<p id="websiteprof" style="text-decoration: underline;margin-left: 3em;"> http://website.ru</p>
						</li>
						<li>
							<p style="font-style: italic;text-align: justify;">
								очень много текста по которурфыолвлыфваыф 
								фа фарпфафывларфр na hasjf bashdfab uasd buay au basb auay bauy auy au анф фитю.
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Конец хидер инер -->
</section><!-- Конец врапер -->
 
<script type="text/javascript" src="./js/init.js"></script>
 
</body>
</html>