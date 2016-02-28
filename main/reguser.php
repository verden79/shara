 <?php 
          include 'lib.php';
          $log  = $_POST['flogin'];
          $pass  = $_POST['fpass'];
          $email = $_POST['femail'];
          $phon  = 'xxx-xx-xx';  //$_POST['fphone'];
          $pId  =  $_POST['fpid'];
          $bon = 0;




          $mysql = new BaseUsers();
            $s=$mysql->addUser($log,$pass,$email,$pId,$bon,$phon);
             if ($s==1001)  
                            {  
                              $resReg = 'Регистрация успешно завершена';
                              // header("Location: ../index.php");    
                              echo $resReg, '<br>'; 
                              echo '<a> На главную </a>';                               
                            }

                     else  echo $s;    


          $mysql->close();
        ?>
     