<?php
include 'config.php'; 

 define ('pId' , 'Id');
 define ('pLogin' , 'Login');
 define ('pPassword' , 'Password');
 define ('pEmail' , 'Email');
 define ('pParentId', 'ParentId');
 define ('pBonus' , 'Bonus');
 define ('pPhone' , 'Phone');
 define ('pPremium' , 'Premium');
define ('pFbonus' , 'Fbonus');

 define ('pBonusJoin', 100);
   define ('pBonPrem1',  120);
   define ('pBonPrem2',  50);
   define ('pBonPrem3',  30);

  define ('pBonVip1',  150);
   define ('pBonVip2',  60);
   define ('pBonVip3',  40);
   
   define ('pBon1',  100);
   define ('pBon2',  35);
   define ('pBon3',  15);


 define ('pPremBonus1', 10);
 define ('pPremBonus2', 3.5);
 define ('pPremBonus3', 1.5);



class BaseUsers
{
  var   $server =  serverConfig ;
  var   $user = userConfig ;
  var   $password = passwordConfig;
  var   $bd = bdConfig;
  var   $table = tableConfig;   
 var   $in;
 
 

    function __construct()
    {
    	$this->in = new mysqli($this->server,$this->user, $this->password, $this->bd);
    	
    	return $this->in;
    }
    
    // если пользователь существует возвращает заполненуую переменную класса User

    function isUserLogin($login) 
    {
      $query = 'select * from '.$this->table.' where '.pLogin.' = \''.$login.'\'';
      $sql = $this->in; 
     
       if ($res = $sql->query($query)) 
      	 {  
      	 	 if ($row = $res->fetch_assoc())
      	  	 {
      	  		 $us = new User($this->in, 
      	  	 			     $row[pId], 
      	  	 			     $row[pLogin],
      	 	 	             $row[pPassword],
      	 	 	             $row[pEmail],
      	 	 	             $row[pParentId],
      	 	 	             $row[pBonus],
      	 	 	             $row[pPhone],
      	 	 	             $row[pPremium],
                         $row[pFbonus]);
    		 
    		 	return $us;
    		 }
    		 else return false;
      	 }	 
       else return false;
    } // 

    
    function isUserId($id)
    {
     $query = 'select * from '.$this->table.' where  '.pId.' = \''.$id.'\'';
      $sql = $this->in; 
     
       if ($res = $sql->query($query)) 
      	 {  
      	 	 if ($row = $res->fetch_assoc())
      	  	 {
      	  		 $us = new User($this->in, 
      	  	 			     $row[pId], 
      	  	 			     $row[pLogin],
      	 	 	             $row[pPassword],
      	 	 	             $row[pEmail],
      	 	 	             $row[pParentId],
      	 	 	             $row[pBonus],
      	 	 	             $row[pPhone],
      	 	 	             $row[pPremium],
                         $row[pFbonus]);
    		 
    		 	return $us;
    		 }
    		 else return false;
      	 }	 
       else return FALSE;
    }

    function isUserEmail($mail)
    {
      $query = 'select * from '.$this->table.' where '.pEmail.' = \''.$mail.'\'';
      $sql = $this->in; 
     
       if ($res = $sql->query($query)) 
      	 {  
      	 	 if ($row = $res->fetch_assoc())
      	  	 {
      	  		 $us = new User($this->in, 
      	  	 			     $row[pId], 
      	  	 			     $row[pLogin],
      	 	 	             $row[pPassword],
      	 	 	             $row[pEmail],
      	 	 	             $row[pParentId],
      	 	 	             $row[pBonus],
      	 	 	             $row[pPhone],
      	 	 	             $row[pPremium],
                         $row[pFbonus]);
    		 
    		 	return $us;
    		 }
    		 else return false;
      	 }	 
       else return false;
    }

    function isUserPhone($phon)
    {
      $query = 'select * from '.$this->table.' where '.pPhone.' = \''.$phon.'\'';
      $sql = $this->in; 
     
       if ($res = $sql->query($query)) 
      	 {  
      	 	 if ($row = $res->fetch_assoc())
      	  	 {
      	  		 $us = new User($this->in, 
      	  	 			     $row[pId], 
      	  	 			     $row[pLogin],
      	 	 	             $row[pPassword],
      	 	 	             $row[pEmail],
      	 	 	             $row[pParentId],
      	 	 	             $row[pBonus],
      	 	 	             $row[pPhone],
      	 	 	             $row[pPremium],
                         $row[pFbonus]);
    		 
    		 	return $us;
    		 }
    		 else return false;
      	 }	 
       else return false;
    }
 	
    // возвращает массив рефералов 1 го уровня для пользователя с id  
    function getChaild($id) 
    {
     $query = 'select * from '.$this->table.' where '.pParentId.' = \''.$id.'\'';
      $sql = $this->in; 
       $ar[0] = 0;
       if ($res = $sql->query($query)) 
      	 {  
           $i = 0;

      	 	 while($row = $res->fetch_assoc())
      	  	 {
      	  		
                $ar[$i] = $row[pId];
    		 	      $i++;  
      		    } 
        
             return $ar;
    		 }	 
         else return false; 
    }
   
    // Добавить пользователя к базе
    function addUser($log,$pass,$email,$pId,$bon,$phon)
    {
    
     if ($this->isUserLogin($log))  return 'login already exists' ;
     if ($this->isUserEmail($email))  return 'Email already exists' ;
     if ($this->isUserPhone($phon))  return 'Phone already exists' ;
 


   	  $str1	= ' ('.pLogin.','.pPassword.','.pEmail.','.pParentId.','.pBonus.','.pPhone.','.pPremium.') ';
  	  $str2	= 'values(\''.$log.'\',\''.$pass.'\',\''.$email.'\',\''.$pId.'\',\''.$bon.'\',\''.$phon.'\',\'0\')';	

      $query = 'insert into '. $this->table.$str1.$str2;
      $sql = $this->in; 
      
     
       if ($res = $sql->query($query))    return 1001;
    	 else return 'ошибка доступа к базе';
    }


    function saveUser($us)
    {
    // UPDATE `mydb`.`users` SET `ParentId`='3', `Phone`='8911' WHERE `Id`='7';

      $str1 = pLogin.'= \''.$us->login.'\','.pPassword.'=\''.$us->pass.'\','.pEmail.'=\''.$us->email.'\','.pParentId.'=\''.$us->parentId.'\',';
      $str2 = pBonus.'=\''.$us->bonus.'\','.pPhone.'=\''.$us->phone.'\','.pPremium.'=\''.$us->premium.'\','.pFbonus.'=\''.$us->fbonus.'\' ' ;
      $str3 = 'where '.pId.' = '.$us->id;
      

        $query = 'update '.$this->table.' set '.$str1.$str2.$str3;
        $sql = $this->in; 
      
       
         if ($res = $sql->query($query))    return 1001;
         else return 'ошибка доступа к базе';
    }

     // распределение по деверву вверх бонусных очков. за вступление
    function spreadJoin($id)
    {     

        $us0 = $this->isUserId($id);
        $us1 = $this->isUserId($us0->parentId);
        $us2 = $this->isUserId($us1->parentId);
        $us3 = $this->isUserId($us2->parentId);

        // 1 referal
                if ($us1->premium == 1) {
                    $us1->bonus =  floor ($us1->bonus + pBon1); 
                    $us1->fbonus =  floor ($us1->fbonus + pBonPrem1 - pBon1); 
                }
                
                if ($us1->premium == 2) 
                    $us1->bonus =  floor ($us1->bonus + pBonPrem1 ); 
                
                if ($us1->premium == 3) 
                    $us1->bonus =  floor ($us1->bonus + pBonVip1 ); 

       // 2 referal
                if ($us2->premium == 1) {
                    $us2->bonus =  floor ($us2->bonus + pBon2); 
                    $us2->fbonus =  floor ($us2->fbonus + pBonPrem2- pBon2); 
                }
                
                if ($us2->premium == 2) 
                    $us2->bonus =  floor ($us2->bonus + pBonPrem2 ); 
                
                if ($us2->premium == 3) 
                    $us2->bonus =  floor ($us2->bonus + pBonVip2 );

       // 3 referal
                if ($us3->premium == 1) {

                    $us3->bonus =  floor ($us3->bonus + pBon3); 
                    $us3->fbonus =  floor ($us3->fbonus + pBonPrem3 - pBon3); 
                }
                
                if ($us3->premium == 2) 
                    $us3->bonus =  floor ($us3->bonus + pBonPrem3 ); 
                
                if ($us3->premium == 3) 
                    $us3->bonus =  floor ($us3->bonus + pBonVip3 );


            $this->saveUser($us0);
            $this->saveUser($us1);
            $this->saveUser($us2);
            $this->saveUser($us3);             
        
            return 'операция успешно завершена';
    }

    
// пополнение бонусов за внесение суммы
    function spreadPut($id,$sum)
    {     

        $us0 = $this->isUserId($id);
        $us1 = $this->isUserId($us0->parentId);
        $us2 = $this->isUserId($us1->parentId);
        $us3 = $this->isUserId($us2->parentId);

        // 1 referal
                if ($us1->premium == 1) {
                    $us1->fbonus =  floor ($us1->fbonus + ($sum/100*pPremBonus1)); 
                }
                
                if ($us1->premium == 2) 
                    $us1->bonus =  floor ($us1->bonus + ($sum/100*pPremBonus1)); 
                
                if ($us1->premium == 3) 
                    $us1->bonus =  floor ($us1->bonus + ($sum/100*pPremBonus1) ); 

       // 2 referal
                if ($us2->premium == 1) {
                    $us2->fbonus =  floor ($us2->fbonus + ($sum/100*pPremBonus2)); 
                }
                
                if ($us2->premium == 2) 
                    $us2->bonus =  floor ($us2->bonus + ($sum/100*pPremBonus2) ); 
                
                if ($us2->premium == 3) 
                    $us2->bonus =  floor ($us2->bonus + ($sum/100*pPremBonus2) );

       // 3 referal
                if ($us3->premium == 1) {
                    $us3->fbonus =  floor ($us3->fbonus + ($sum/100*pPremBonus3)); 
                }
                
                if ($us3->premium == 2) 
                    $us3->bonus =  floor ($us3->bonus + ($sum/100*pPremBonus3) ); 
                
                if ($us3->premium == 3) 
                    $us3->bonus =  floor ($us3->bonus + ($sum/100*pPremBonus3) );


            $this->saveUser($us0);
            $this->saveUser($us1);
            $this->saveUser($us2);
            $this->saveUser($us3);             
        
            return 'операция успешно завершена';
    }

    function close()
    {
    	$this->in->close();
    }

}

// класс для работы с юзером

class User 
{
  var $id;
  var $login;    //  Login 
  var $pass;		//  Password
  var $email;    //  Email
  var $parentId;      //  Соддержит ссылку на пригласившего 
  var $bonus;    //  бонусы на счету
  var $fbonus;  // фантомные бонусы.
  var $phone;  // телефон 
  var $premium; // есть ли премиум акаунт;
  var $conect; //ссылка на конект базы.
  // 2 таблица данных
  var $photo;  // url photo

  var $referal_count; // количество рефералов
  

  public function __construct($con, $idz,$loginz,$passz,$emailz,$parentIdz,$bonusz,$phonez,$premiumz,$fbonuz)
  {
  	$this->connect = $con; 
  	$this->id = $idz;
  	$this->login = $loginz;
  	$this->pass =$passz;
  	$this->email =$emailz;
  	$this->parentId = $parentIdz;
  	$this->bonus =$bonusz;
  	$this->phone = $phonez;
  	$this->premium = $premiumz;
    $this->fbonus = $fbonuz;
  }


  function saveUsers()   // сохранить юзера в таблице
  {
  }

  function getCountReferal($con)  // подсчитывает количество рефералов юзера
  {
      $i=0; 
        $r1 = $con->getChaild($this->id);   
        if ( $r1[0] != 0) 
            foreach($r1 as $ch1)
            {
                $i++;
                $r2 = $con->getChaild($ch1);   
                if ( $r2[0] != 0)                   
                    foreach($r2 as $ch2)
                    {
                        $i++;
                         $r3 = $con->getChaild($ch2);   
                         if ( $r3[0] != 0)  $i = $i + count($r3); 
                    }
            
            }
         
          else return 0;
           return $i;
  } // конец функции 
} // конец класса

// класс для отправки пользовательских данных для json
class SendUser
{
  var $id;
  var $login;    //  Login 
  var $email;    //  Email
  var $parentId;      //  Соддержит ссылку на пригласившего 
  var $bonus;    //  бонусы на счету
  var $fbonus;  // фантомные бонусы.
  var $phone;  // телефон 
  var $premium; // есть ли премиум акаунт;
  var $photo;  // url photo
  var $referal_count; // количество рефералов
  var $kvo_otziv; // количество отзывов
  var $web; // адресс webresurs;

  public function __construct($us)
  {
    
    $this->id = $us->id;
    $this->login = $us->login;
    $this->email =$us->email;
    $this->parentId = $us->parentId;
    $this->bonus =$us->bonus;
    $this->phone = $us->phone;
    $this->premium = $us->premium;
    
      $this->photo  = 'img/user/foto/4.jpg';  
      $this->referal_count = '7'; 
      $this->kvo_otziv = '3';
      $this->web = 'www.website.ru'; 
  }
}


//********************************************************
// класс по управлению проектом
class sharaEngine  
{
  public static $in;  // конект к басзе

  
  // удаляет товар из базы акций 
  public static function delTovar($id)
  {
    // DELETE FROM `mydb`.`users` WHERE `Id`='16';
        $query = 'delete from akc where Id = '.$id;
        $sql = self::$in; 

         if ($res = $sql->query($query))    return 1001;
         else return 100;

  }


}


//********************************************************

class Tovar
{
  var $id;                // id товара
  var $img;               // путь к урл картинки
  var $shotdesk;          // краткое описание
  var $fulldesk;          // полное описание
  var $dataBegin;         // начальная дата 
  var $dataEnd;           // дата окончания
  var $priceBegin;        // начальная цена
  var $priceEnd;          // конечная цена со скидкой
  var $summaBonuSpent;    // сумма бонусов которые можно потратить
  var $location;          // локация мемстонахождения прохождения акции
  var $idUser;            // id юзера который установил акцию.
  var $table = 'akc';

  var $in;    // mysql connector


    function __construct($sql)
    {
      $this->in = $sql;
    }

  // получить товар по его Id
  function getTovarId($idz,$sql)
  {
      $query = 'select * from '.$this->table.' where  Id = \''.$idz.'\'';
      $sql; 
     
       if ($res = $sql->query($query)) 
         {  
           if ($row = $res->fetch_assoc())
              {  
                $tov = new Tovar($sql);
                $tov->id = $row['Id'];
                $tov->img = $row['Img'];
                $tov->shotdesk = $row['Shotdesk'];
                $tov->fulldesk = $row['Fulldesk'];
                $tov->dataBegin = $row['DataBegin'];
                $tov->dataEnd = $row['DataEnd'];
                $tov->priceBegin = $row['PriceBegin'];
                $tov->priceEnd = $row['PriceEnd'];
                $tov->summaBonuSpent = $row['SummBallSpent'];
                $tov->location = $row['Location'];
                $tov->idUser = $row['IdUser'];                
                       
                return $tov;
              }
            else return false;
         }   
       else return false;
  }

  // получить массив id товаров по Id usera
  function getTovarUserId()
  {
      $query = 'select * from '.$this->table.' where Id = '.$this->id;
      $sql = $this->in; 
       $ar[0] = 0;
       if ($res = $sql->query($query)) 
         {  
           $i = 0;

           while($row = $res->fetch_assoc())
             {
               $ar[$i] = $row['Id'];
                $i++;  
              } 
        
             return $ar;
         }   
         else return false; 
  }

   // получить весь список id товаров  в виде массива
  function getArrayIdTovarAll()
  {
    $query = 'select * from '.$this->table ;
      $sql = $this->in; 
       $ar[0] = 0;
       if ($res = $sql->query($query)) 
         {  
           $i = 0;

           while($row = $res->fetch_assoc())
             {
              
                $ar[$i] = $row['Id'];
                $i++;  
              } 
        
             return $ar;
         }   
         else return false; 

  }

  // сохранить товар в базе
  function saveTovarInBase()
  {
      // UPDATE `users` SET `ParentId`='3', `Phone`='8911' WHERE `Id`='7';

      $str1 = 'Id = '.$this->id.', Img = '.$this->img.', Shotdesk = '.$this->shotdesk.', Fulldesk = '.$this->fulldesk.', DataBegin = '.$this->dataBegin.', DataEnd = '.$this->dataEnd.', PriceBegin = '.$this->priceBegin.', PriceEnd = '.$this->priceEnd.', SummBallSpent = '.$this->summaBonuSpent.', Location = '.$this->location.', IdUser = '.$this->idUser; 
       
       $str2 = ' where Id = '.$this->id;
      

        $query = 'update '.$this->table.' set '.$str1.$str2;
        // echo '<br>'.$query.'<br>';
        $sql = $this->in; 
      
       
          if ($res = $sql->query($query))    return 1001;
          else return 'ошибка доступа к базе';
  } 

   // добавить товар в базу 
   function addTovar()
   {
   //  INSERT INTO table_name (column1,column2,column3,...)  VALUES (value1,value2,value3,...);

     $str1 = ' (Img,Shotdesk,Fulldesk,DataBegin,DataEnd,PriceBegin,PriceEnd,SummBallSpent,Location,IdUser)';
     $str2 = ' values(\''.$this->img.'\',\''.$this->shotdesk.'\',\''.$this->fulldesk.'\',\''.$this->dataBegin.'\',\''.$this->dataEnd.'\',\''.$this->priceBegin.'\',\''.$this->priceEnd.'\',\''.$this->summaBonuSpent.'\',\''.$this->location.'\',\''.$this->idUser.'\')';  

      $query = 'insert into '. $this->table.$str1.$str2;
      echo '<br>'.$query.'<br>';
      $sql = $this->in; 
      
     
       if ($res = $sql->query($query))    return 1001;
       else return 'ошибка доступа к базе';
    }

   } 

  //*******************************************************
  // класс необходимый для пересылки товара
  class SentTovar
  {
      var $id;                // id товара
      var $img;               // путь к урл картинки
      var $shotdesk;          // краткое описание
      var $fulldesk;          // полное описание
      var $dataBegin;         // начальная дата 
      var $dataEnd;           // дата окончания
      var $priceBegin;        // начальная цена
      var $priceEnd;          // конечная цена со скидкой
      var $summaBonuSpent;    // сумма бонусов которые можно потратить
      var $location;          // локация мемстонахождения прохождения акции
      var $idUser;            // id юзера который установил акцию.
      
      var $zvezd;             // количество звезд
      var $kategoria;          // категория (вид категории еда / развлечение спорт / красота и уход / медецина / образование)
      var $kvo_otziv;

       public function __construct($tov)
       {
          $this->id = $tov->id ;
          $this->img = $tov->img ;
          $this->shotdesk = $tov->shotdesk;
          $this->fulldesk = $tov->fulldesk;
          $this->dataBegin = $tov->dataBegin;
          $this->dataEnd = $tov->dataEnd ;
          $this->priceBegin = $tov->priceBegin;
          $this->priceEnd = $tov->priceEnd;
          $this->summaBonuSpent = $tov->summaBonuSpent;
          $this->location = $tov->location;
          $this->idUser =  $tov->idUser;     
          
          $this->zvezd =     rand(1,5);   // '2';
          $this->kategoria  = '1';
          $this->kvo_otziv = rand(0,100); 
       }

  }// конец класса SentTovar



?>