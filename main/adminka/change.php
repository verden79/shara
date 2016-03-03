<?php 
include '../lib.php';
$mysqli = new BaseUsers();
SharaEngine::$in = $mysqli->in; 

  if (isset($_GET['del'])) 
  	{ 
  	   echo 'Акция под номером -'.$_GET['del'].' удалена из базы' ;
  	   SharaEngine::delTovar($_GET['del']);

  	}
  	   
  if (isset($_GET['auk'])) 
  	{ 
  		echo 'Аукциона для товара под номером - '.$_GET['auk'] ;
  		echo ' <br> <hr> Аукцион в стадии разработки';

  	}	

$mysqli->close();
?>