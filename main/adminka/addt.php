<?php
include '../lib.php'; 

$fimg = 'http://12shara.ru/img/tovar/1.jpg';
$fidUser = $_POST['fidUser'];
$fshotdesk  =  $_POST['fshotdesk'];
$ffulldesk  =  $_POST['ffulldesk'];
$fdataBegin  =  $_POST['fdataBegin'];
$fdataEnd  =  $_POST['fdataEnd'];
$fpriceBegin  =  $_POST['fpriceBegin'];
$fpriceEnd  =  $_POST['fpriceEnd'];
$fball  =  $_POST['fball'];
$flocation  =  $_POST['flocation'];




$uploaddir = '../../img/tovar/';
$extension = substr(strrchr(basename($_FILES['fimg']['name']),'.'), 1);
$name = time().md5(time()).'.'.$extension;
$uploadfile = $uploaddir . $name;

$fimg = 'http://12shara.ru/img/tovar/'.$name;

 if(is_uploaded_file($_FILES["fimg"]["tmp_name"]))
 if (move_uploaded_file($_FILES['fimg']['tmp_name'], $uploadfile)) {
  
    echo 'загружен нормально - file - '.$fimg;

	

} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}




$mysqli = new BaseUsers();
 $tov = new Tovar($mysqli->in); 
 
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
     
     echo '<br> <hr>';
	 
	 if ($tov->addTovar() == 1001) 
	     echo 'Акция успешно занесена в базу.'; 
	 else { 
	 		echo 'не удалось занести в базу <br>';
	 	  } 
	 
	 echo '<br>';


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

$mysqli->close();
 function getRandomFileName($path, $extension='')
    {
        $extension = $extension ? '.' . $extension : '';
        $path = $path ? $path . '/' : '';
 
        do {
            $name = md5(microtime() . rand(0, 9999));
            $file = $path . $name . $extension;
        } while (file_exists($file));
 
        return $name;
    }

?>