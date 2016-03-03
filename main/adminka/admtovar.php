<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

   
   
    <title>Акции и товары</title>

    <!-- container references -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="../../css/index.css" rel="stylesheet" />
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
   
   
	
</head>
<body>
<?php 
  include '../lib.php';
  $mysqli = new BaseUsers();
 
?>    


<!-- форма для заполнения товара -->
    <div style="margin-left: 120px; margin-top: 50px; width:40%">
        <form   class="form-inline" method="POST" action="addt.php" enctype="multipart/form-data">
          <fieldset>
            
            <legend>Создать акцию</legend>
             <div class="form-group">
              <br>
                <label for="exampleInputEmail1">Картинка акции </label> <br>
                 <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                  <input type="file"  name="fimg" accept="image/*"> <!-- -->

                    <div class="form-group" style="margin-top:10px">
                        <label for="exampleInputEmail1"> Id создателя акции  </label>  <br>
                        <input type="text" placeholder="id user" name="fidUser"> 
                    </div>    


             </div>

             <div style="margin-top: 20px">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Краткое описание </label> <br>
                        <textarea rows="4"  name = "fshotdesk"> </textarea>
                    </div>    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Полное описание </label> <br>
                        <textarea rows="4" name="ffulldesk"></textarea>
                    </div>    
             </div>
           
             <div style="margin-top: 20px">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Дата начала </label> <br>
                        <input type="datetime-local" placeholder="Дата" name="fdataBegin"> 
                        
                    </div>    

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Дата окончания </label> <br>
                        <input type="datetime-local" placeholder="Дата" name="fdataEnd"> 
                    </div>    
             </div>
              
              
             <div style="margin-top: 20px">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена начальная </label> <br>
                        <input type="text" placeholder="Укажите цену" name="fpriceBegin"> 
                    </div>    

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Цена со скидкой </label> <br>
                        <input type="text" placeholder="Укажите цену" name ="fpriceEnd"> 
                    </div>    
             </div>

      

           <div style="margin-top: 20px">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Сумма бонусов  </label> <br>
                        <input type="text" placeholder="Бонусы" name = "fball"> 
                    </div>    

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Локация акции </label> <br>
                        <input type="text" placeholder="Место проведения" name = "flocation"> 
                    </div>    
             </div>             
           
            <span class="help-block"></span>
            <button type="submit" class="btn btn-default btn-lg active">Отправить</button>
          </fieldset>
        </form>   
    </div>    
   
    

    <div style="margin-left: 30px; margin-top: 50px; width:100%; margin-bottom:100px; " >
        <table class= "table table-hover" border =1px style = "width:95%;">
          <tr style="text-align: center; background-color: #dddddd;">
              <th>
                 Id  
              </th>

              <th style ="width:15%">
                Файл картинки 
              </th>

              <th>
                 короткое описание 
              </th> 

              <th>
                 Полное описание 
              </th>

              <th>
                 Дата начальная <br>
                 Дата конечная.
              </th> 
                <th>
                 Цена начальная <br>
                 Цена конечная.
              </th> 

              <th>
                Id usera 
              </th>
              
              <th>
                
              </th> 
          <tr>

          <?php
             
             $tov = new Tovar($mysqli->in);
             $artov = $tov->getArrayIdTovarAll();
             foreach($artov as $ind)
             {
                $tv = $tov->getTovarId($ind,$mysqli->in);

                echo '<tr >';

                  echo '<td style="text-align: center">';   echo $tv->id;    echo '</td>';

                  echo '<td>';   echo "<img src = $tv->img style = 'width:55%'>";    echo '</td>';

                  echo '<td style="padding-left:7px">  ';   echo $tv->shotdesk;    echo '</td>';

                  echo '<td style="padding-left:7px"> ';   echo $tv->fulldesk;    echo '</td>';
 
                  echo '<td style="text-align: center">';
                              echo $tv->dataBegin.'<br> '.$tv->dataEnd;    echo '</td>';
                
                   echo '<td style="text-align: center">';
                              echo $tv->priceBegin.'<br> '.$tv->priceEnd;    echo '</td>';                              

                
                   echo '<td style="text-align: center">';  echo $tv->idUser;    echo '</td>';
               
                   echo '<td style="padding:5px">';  
                    echo "<form action='change.php' method = 'GET'>"; 
                      echo "<button type='submit' class='btn btn-danger' value = $tv->id name = 'del' >Удалить</button> <br>"; 
                      echo "<button type='submit' class='btn btn-success' value = $tv->id name = 'auk' >Аукцион</button>";
                    echo '</form>';
                   echo '</td>'; 
                
                echo '</tr>';
             }



          ?>

       </table>
    </div>



	<script src="js/bootstrap.min.js"></script>
    
</body>
</html>