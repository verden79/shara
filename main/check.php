<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <!--
        Customize the content security policy in the meta tag below as needed. Add 'unsafe-inline' to default-src to enable inline JavaScript.
        For details, see http://go.microsoft.com/fwlink/?LinkID=617521
    -->
   
    <title>container</title>

    <!-- container references -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="../css/index.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/owl/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl/owl.theme.css" rel="stylesheet">
   
	
</head>
<body>
    <div class = "container" style="padding 100px;"> 
        
    <h1> Вход в кабинет </h1>  <hr> 

          <ul class="nav nav-pills">
            <li role="presentation"><a href="../index.php">На главную</a></li>
            <li role="presentation" class="active" ><a href="#">Личный кабинет</a></li>
            <li role="presentation"><a href="reg.php">Присоедениться</a></li>
          </ul>
    </div>    
          <br> <br>



        <form class="form-horizontal" action="verify.php" method= "POST" >
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-5">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Login" name="login">   <!-- login  -->
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">  <!-- Password -->
            </div>
          </div>

          <div class="form-group">
          

            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Запомнить меня
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-default">Вход</button>
          
                  <a href="reg.php">       
                   <button type="button" class="btn btn-primary btn-default">Регистрация</button>
                  </a>       
    
            </div>
          </div>
        </form>

                 

   
    <!-- Cordova reference, this is added to your app when it's built. -->
 	<script src="../js/bootstrap.min.js"></script>
    <script src="../scripts/index.js"></script>
    <script src="../js/owl/owl.carousel.min.js"></script>
</body>
</html>