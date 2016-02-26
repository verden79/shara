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
        
    <h1> Регистрация </h1>  <hr> 

          <ul class="nav nav-pills">
            <li role="presentation"><a href="../index.html">На главную</a></li>
            <li role="presentation"><a href="check.php">Личный кабинет</a></li>
            <li role="presentation" class="active" ><a href="#">Присоедениться</a></li>
          </ul>
    </div>    
          <br> <br>



         <form class="form-horizontal" action="reguser.php" method="POST">

         <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Login" name="ilogin">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="iemail">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Phone" name="iphone">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="ipass">
            </div>

         
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ID Пригласишего</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEmail3" placeholder="ID" name="iid" 
               value = 
                      <?php  
                        if (isset($_GET['ind'])) echo $_GET['ind'];
                      ?>
            </div>
          </div>

            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-default">Регистрация</button>
            </div>
          </div>
        </form>


       

    <!-- Cordova reference, this is added to your app when it's built. -->
 	<script src="../js/bootstrap.min.js"></script>
    <script src="../scripts/index.js"></script>
    <script src="../js/owl/owl.carousel.min.js"></script>
</body>
</html>