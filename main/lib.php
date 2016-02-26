<?php

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

  define ('pBonVip1',  120);
   define ('pBonVip2',  50);
   define ('pBonVip3',  30);
   
   define ('pBon1',  100);
   define ('pBon2',  35);
   define ('pBon3',  15);


 define ('pPremBonus1', 10);
 define ('pPremBonus2', 3.5);
 define ('pPremBonus3', 1.5);



class BaseUsers
{
  var   $server = 'localhost';
  var 	$user = 'root';
  var	$password = 'root';
  var	$bd = 'mydb';
  var	$table = 'users';
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
    
     if ($this->isUserLogin($log))  return 'Такой логин уже занят' ;
     if ($this->isUserEmail($email))  return 'Такой Email уже занят' ;
     if ($this->isUserPhone($phon))  return 'Такой phone уже существует в базе' ;
 


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
  var $conect; //ссылка на конект.
  

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

  
}

?>