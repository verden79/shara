<?php
include 'lib.php';
$name = $_POST['flogin'];
$pas = $_POST['fpassword'];


   
$mysqli = new BaseUsers();

 if ($us = $mysqli->isUserLogin($name))
 	
        if ($us->pass == $pas) {

      		session_start();
        	$_SESSION['id'] = $us->id;
       		header("Location: cab.php");    
      	}
      
      else header("Location: ../login.php?er=2");     // wrong password 
	
 	else header("Location: ../login.php?er=3");   // no user 


 $mysqli->close();
?>
