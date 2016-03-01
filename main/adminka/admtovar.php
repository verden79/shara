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
  $tov = new Tovar($mysqli->in);
?>    


<!-- форма для заполнения товара -->
    <div style="margin-left: 120px; margin-top: 50px; width:40%">
        <form   class="form-inline" method="POST" action="addt.php">
          <fieldset>
            
            <legend>Создать акцию</legend>
             <div class="form-group">
              <br>
                <input type="text" placeholder="Картинка акции"> 
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
   
    
    <div style="margin-left: 120px; margin-top: 50px; width:100%; margin-bottom:100px; " >
        <table border = 1 style = "width:50%; background-color: #cccccc ">
          <tr style="text-align: center">
              <td>
                Id 
              </td>

              <td>
                Файл картинки 
              </td>

              <td>
                 короткое описание 
              </td> 

              <td>
                Id usera 
              </td> 
          <tr>

       </table>
    </div>



	<script src="js/bootstrap.min.js"></script>
    
</body>
</html>