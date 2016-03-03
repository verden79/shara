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
			 			 
			 			 $idz = $us->id; // для пригласительной ссылки 

            	    	 $ref = $mysqli->getChaild($us->id); 
            	    	 if ($ref[0] != 0) 	 $refs = $us->getCountReferal($mysqli);
            	    	  else $refs = 0;
			    		
					}
				else {$isuser = false; }	
		   	}
		   	else 
		   		{  	$isuser = false;  }






if ($isuser == true ) 
{
 // json строка 
	$jsdata  =  array ('name' => $us->login, 'email' => $us->email, 'bonus' => $us->bonus, 'akk' => $us->premium, 'ref' => $refs );
 
	if ( $ref[0] != 0 )	 
	foreach($ref as $ch)
	{
 		$t1 = $mysqli->isUserId($ch);
 			$a1r = $mysqli->getChaild($t1->id); 
		
			if ($a1r[0] != 0 )
			foreach($a1r as $ch1)
			{
			 		$t2 = $mysqli->isUserId($ch1);
 					   $a2r = $mysqli->getChaild($t2->id); 	
 					   	$a1r = $mysqli->getChaild($t1->id); 
		
						if ($a2r[0] != 0 )
							foreach($a2r as $ch2)
							{
							 		$t3 = $mysqli->isUserId($ch2);
				 					 $a3r = $mysqli->getChaild($t3->id); 	
							
									$su = new SendUser($t3);
									$su->referal_count = $t3->getCountReferal($mysqli); 
									$s3[] = $su;
							}

					$su = new SendUser($t2);
					$su->referal_count = $t2->getCountReferal($mysqli); 			
					$s2[] = $su;
			}

		$su = new SendUser($t1);
		$su->referal_count = $t1->getCountReferal($mysqli); 			
		$s1[] = $su;
		
	}

 
 echo '<script>';
 echo 's0 = '.json_encode($jsdata).' ; ';
  if (isset($s1)) echo 's1 = '.json_encode($s1).' ; ';
  if (isset($s2)) echo 's2 = '.json_encode($s2).' ; ';
  if (isset($s3)) echo 's3 = '.json_encode($s3).' ; ';
 echo '</script>';


}

?>