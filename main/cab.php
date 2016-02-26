<!DOCTYPE html>
<head>
 <meta charset="utf-8" />
 
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="../css/index.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/owl/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl/owl.theme.css" rel="stylesheet">

</head>

<body>

<div class = "container">
<?php 
   include 'lib.php';
   
       session_start();

	   $mysqli = new BaseUsers();
	   
	   if (!isset($_SESSION['id'])) { header("Location: check.php");  }

	   if ($us = $mysqli->isUserId($_SESSION['id']))
 			{
      			$name = $us->login;
			}
 	
 // обработка формы.
 if (isset($_POST['change'])) 
   {
   	 if (isset($_POST['log'])) 
   		  if ($_POST['log'] != '') 	$us->login = $_POST['log'];
   	 if (isset($_POST['mail']))
   	  	  if ($_POST['mail'] != '') 	$us->email = $_POST['mail'];
   	 if (isset($_POST['pas']))	
   	 	  if ($_POST['pas'] != '') $us->pass = $_POST['pas'];
   	 if (isset($_POST['phon']))
   	 		if ($_POST['phon'] != '') 	$us->phone = $_POST['phon'];

     $mysqli->saveUser($us);
   }


?>

 	<h1> Линый кабинет </h1>  <hr> 

          <ul class="nav nav-pills">
            <li role="presentation"><a href="../index.php">На главную</a></li>
            <li role="presentation" class="active"><a href="check.php">Личный кабинет</a></li>
           
          </ul>

         
</div>

          
           <table class="mtable">
             <tr  > 
             	<td class="left">
                 	<!-- левая колонка -->	
							   	<form class="form-horizontal" method="POST">


								  <div class="control-group">
								    <label class="control-label" for="inputEmail">Login</label>
								    <div class="controls">
								      <input type="text" id="inputEmail" placeholder= <?php echo $us->login; ?> name="log">  <!--  -->
								    </div>
								  </div>
								 

								  <div class="control-group">
								    <label class="control-label" for="inputEmail">Email</label>
								    <div class="controls">
								      <input type="text" id="inputEmail" placeholder=<?php echo $us->email; ?> name="mail"> <!--  -->
								    </div>
								  </div>
								  
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Пароль</label>
								    <div class="controls">
								      <input type="password" id="inputPassword" placeholder=<?php echo $us->pass; ?> name="pas">   <!--  -->
								    </div>
								  </div>
								  
								  <div class="control-group">
								    <label class="control-label" for="inputEmail">Телефон</label>
								    <div class="controls">
								      <input type="text" id="inputEmail" placeholder=<?php echo $us->phone; ?> name="phon"> <!--  -->
								    </div>
								  </div>

								  <div class="control-group">
								    <div class="controls">
								      <button type="submit" class="btn btn-primary" style="margin-top:30px" name = "change" value="ok">Изменить</button>
								    </div>
								  </div>
								
								</form>


             	</td>
             	<td class = "right"  valign="top"> 
             		<!-- правая  колонка -->	
             			<div>
             				<h2> 
             					 <?php 
             					   if ($us->premium == 0) 
             					   	   {echo ' Неподтвержденный акаунт: '.$us->bonus. ' - бонусов.' ;}
             					   else if ($us->premium == 1) 
             					   	    {echo ' Простой акаунт: '.$us->bonus. ' - бонусов. Потерянных бонусов - '.$us->fbonus ;} 
             					      else  if ($us->premium == 2) {echo ' Премиум акаунт: '.$us->bonus. ' - бонусов.' ;}
             					    	 else if ($us->premium == 3) 
             					    	    {echo ' V.I.P акаунт: '.$us->bonus. ' - бонусов.' ;}

             					  ?> </h2> 
      						<button type="button" class="btn btn-default bt9" onclick="but(1,<?php echo $us->id; ?>)">Простой акаунт</button>
      						<button type="button" class="btn btn-primary bt9" onclick="but(2,<?php echo $us->id; ?>)"> Купить Премиум</button>
      						<button type="button" class="btn btn-success bt9" onclick="but(3,<?php echo $us->id; ?>)">Купить V.I.P</button>
    					</div>

    					<div id="bbox">

    					</div>
    					
    					<div>
    					  <?php 
    					 	  
    					 	    echo '<br>';
    					   	    echo 'Дерево рефералов','<br>';

    					   	    ref1($us->id,$mysqli);
    					   	     
    					   		$adr = 'http://localhost:8888/main/reg.php?ind='.$us->id;
 								echo 'ссылка для приглашения:'.'<a href = \''.$adr.'\'>'.$adr.'</a>';
     					  ?>		
    					<div>



             	</td>


             </tr>
           </table>
     						
      					
          
<?php

  	
	function ref1($fid,&$mysqli)
       {
		
    	 	$icount=0; 
    	 	$rowl = $mysqli->getChaild($fid);   
    		if ( $rowl[0] != 0) {
    			echo '<ul>';  
    			foreach ($rowl as $val) {
    			 	$tm = $mysqli->isUserId($val); 
    			   	echo '<li>'.$tm->login.'</li>';
    			    $icount++;
    				ref2($tm->id,$mysqli);
    			}
    	
    		}  
    		return $icount;
    	} // end func1();

	function ref2($fid,&$mysqli)
       {
		
    	 	$icount=0; 
    	 	$rowl = $mysqli->getChaild($fid);   
    		if ( $rowl[0] != 0) {
    			echo '<ul>';  
    			foreach ($rowl as $val) {
    			 	$tm = $mysqli->isUserId($val); 
    			   	echo '<li>'.$tm->login.'</li>';
    			    $icount++;
    				ref3($tm->id,$mysqli);
    			}
    			echo '</ul>'; 
    		}  
    		return $icount;
    	} // end func2();

	function ref3($fid,&$mysqli)
       {
		
    	 	$icount=0; 
    	 	$rowl = $mysqli->getChaild($fid);   
    		if ( $rowl[0] != 0) {
    			echo '<ul>';  
    			foreach ($rowl as $val) {
    			 	$tm = $mysqli->isUserId($val); 
    			   	echo '<li>'.$tm->login.'</li>';
    			    $icount++;
    			}
    			echo '</ul>'; 
    		}  
    		return $icount;
    	} // end func3();


$mysqli->close();
?>

	<script src="../js/bootstrap.min.js"></script>
    <script src="../scripts/index.js"></script>
    <script src="../js/owl/owl.carousel.min.js"></script>

</body>