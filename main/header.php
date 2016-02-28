<?php 
	       session_start();

		   $mysqli = new BaseUsers();
		   
		   if (isset($_SESSION['id'])) 
		   	{ 
		   		if ($us = $mysqli->isUserId($_SESSION['id']))
			 		{
			    		$name = $us->login;
			    		$bal = $us->bonus;
			    		  switch ($us->premium)
			    		  {
			    		  		case 0 : $akk = 'Неподтвержденный акаунт'; break;
			    		  		case 1 : $akk = 'Простой акаунт '; break;	
			    		  		case 2 : $akk = 'Premium акаунт '; break;
			    		  		case 3 : $akk = 'V.I.P '; break;
			    		  }
			    		  	$isuser = true;
			    		  	echo '<script>';
  							echo 'jsvt = '.$us->bonus; 
							echo '</script>';

					$ttt = ' <a href = \'/main/cab.php\' >Пользователь -'.$name . '</a>';
					}
				else { $akk = '';}	
		   	}
		   	else 
		   		{  	$isuser = false; }


?>