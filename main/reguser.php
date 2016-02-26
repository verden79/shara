 <?php 
          include 'lib.php';
          $log  = $_POST['ilogin'];
          $pass  = $_POST['ipass'];
          $email = $_POST['iemail'];
          $phon  = $_POST['iphone'];
          $pId  =  $_POST['iid'];
          $bon = 0;




          $mysql = new BaseUsers();
            $s=$mysql->addUser($log,$pass,$email,$pId,$bon,$phon);
             if ($s==1001) echo "Регистрация успешно завершена";
                     else  echo $s;    


          $mysql->close();
        ?>
     