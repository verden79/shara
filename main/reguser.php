 <?php 
          include 'lib.php';
          $log  = $_POST['flogin'];
          $pass  = $_POST['fpass'];
          $email = $_POST['femail'];
          $phon  = $_POST['fphone'];
          $pId  =  $_POST['fpid'];
          $bon = 0;




          $mysql = new BaseUsers();
            $s=$mysql->addUser($log,$pass,$email,$pId,$bon,$phon);
             if ($s==1001)  
                            {  
                              $resReg = 'Ok';
                              // header("Location: ../index.php");    
                              echo $resReg, '<br>'; 
                              echo '<a href = \'../index.php\'> Main page </a>';                               
                            }

                     else  echo $s;    


          $mysql->close();
        ?>
     `