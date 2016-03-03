<?php 
	function strvar($namevar,$strvalue)
	{
 		echo "namevar = 10 " ; 
	} 

	       session_start();
		   $mysqli = new BaseUsers();
		   $isuser = false;
		   
		   if (isset($_SESSION['id'])) 
		   	{ 
		   		if ($us = $mysqli->isUserId($_SESSION['id']))
			 		{

			    		$isuser = true;
            	    	 $ref = $mysqli->getChaild($us->id); 
            	    	 $refs = count($ref);
			    		
					}
				else {$isuser = false; }	
		   	}
		   	else 
		   		{  	$isuser = false; }


// если пользователь авторизован  вывести информацию о нем.

if ($isuser == true ) 
{
 // json строка 
	$jsdata  =  array ('name' => $us->login, 'email' => $us->email, 'bonus' => $us->bonus, 'akk' => $us->premium, 'ref' => $refs );

 echo '<script>';
 echo 's0 = '.json_encode($jsdata).' ; ';
 echo '</script>';

} else {
	 echo '<script>';
	 echo 's0 = 0;';
	 echo '</script>';
  
  }
             $tov = new Tovar($mysqli->in);
             $artov = $tov->getArrayIdTovarAll();
             foreach($artov as $ind)
             {
                $tv = $tov->getTovarId($ind,$mysqli->in);
                $arrtov[] = new SentTovar($tv);
             }
             if (isset($arrtov)) 
             	 {
             	 	echo '<script>';
             	 	echo 'tov = '.json_encode($arrtov);
             	 	echo '</script>';
             	 } 
               
                


?>