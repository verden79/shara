<?php 
include 'lib.php';
$id  = $_POST['id'];
$ak = $_POST['ak'];

$mysqli = new BaseUsers();

if ($us = $mysqli->isUserId($id))
 	{
		if ($ak == 1) {
			if ($us->premium == 0 ) {
				$us->premium = 1; 
				$us->bonus = $us->bonus + 100;
				$mysqli->saveUser($us);
				$mysqli->spreadJoin($id);
				echo 'простой акаунт зарегестрирован';
			}	
		}
					
		if ($ak == 2) {
			$us->premium = 2;
			$mysqli->saveUser($us);
			echo 'premium акаунт зарегестрирован';
		}

		if ($ak == 3) {

				$us->premium = 3;
				$us->bonus = $us->bonus + 1000;
				$mysqli->saveUser($us);
				$mysqli->spreadPut($id,1000);
				echo "string"; 'V.I.P акаунт зарегестрирован';
		}
	} else echo 'ошибка занесения в базу данных '.$id;


$mysqli->close();
?>