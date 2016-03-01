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
							
									$s3[] = new SendUser($t3);
							}

					$s2[] = new SendUser($t2);
			}

		$s1[] = new SendUser($t1);
		
	}

 
 echo '<script>';
 echo 's0 = '.json_encode($jsdata).' ; ';
 echo 's1 = '.json_encode($s1).' ; ';
 echo 's2 = '.json_encode($s2).' ; ';
 echo 's3 = '.json_encode($s3).' ; ';
 echo '</script>';


}

?>