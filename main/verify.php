<?php
include 'lib.php';
$name = $_POST['login'];
$pas = $_POST['pass'];


   
$mysqli = new BaseUsers();

 if ($us = $mysqli->isUserLogin($name))
 	{
      if ($us->pass == $pas) {

       session_start();
       $_SESSION['id'] = $us->id;
       header("Location: cab.php");    }
      else  printf('неверный пароль');
	}
 	else echo ' нет такого ';


 $mysqli->close();
?>
