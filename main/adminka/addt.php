<?php
include '../lib.php';
$fimg = '../../img/tovar/1.jpg';
$fidUser = $_POST['fidUser'];
$fshotdesk  =  $_POST['fshotdesk'];
$ffulldesk  =  $_POST['ffulldesk'];
$fdataBegin  =  $_POST['fdataBegin'];
$fdataEnd  =  $_POST['fdataEnd'];
$fpriceBegin  =  $_POST['fpriceBegin'];
$fpriceEnd  =  $_POST['fpriceEnd'];
$fball  =  $_POST['fball'];
$flocation  =  $_POST['flocation'];


$mysqli = new BaseUsers()
 $tov = new Tovar($mysql->in); 
 
	$tov->img = $fimg;
	$tov->idUser =	$fidUser ;
	$tov->shotdesk = $fshotdesk ;
	$tov->fulldesk = $ffulldesk ;
	$tov->dataBegin = $fdataBegin ;
	$tov->dataEnd =	$fdataEnd ;
	$tov->priceBegin = $fpriceBegin ;
	$tov->priceEnd = $fpriceEnd;
	$tov->summaBonuSpent= $fball;
	$tov->location = $flocation;  
	$tov->$fidUser = $fidUser;

	 if ($tov->saveTovarInBase() == 1001) 
	    {echo 'Акция успешно занесена в базу.'}

echo '<pre>';

echo "<img  src = $fimg> <br>";
print_r($fidUser);  echo '<br>';
print_r($fshotdesk); echo '<br>';
print_r($ffulldesk);  echo '<br>';
print_r($fdataBegin);  echo '<br>';
print_r($fdataEnd);  echo '<br>';
print_r($fpriceBegin); echo '<br>';
print_r($fpriceEnd); echo '<br>';


print "</pre>";


echo '<br>','<a href = \'admtovar.php \'> Добавить еще товар  </a> ';
echo ' <a  style = "margin-left:10px" href = \'../../index.php \'> На главную </a> ';

$mysql->close();
?>