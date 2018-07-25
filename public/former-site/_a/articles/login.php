<?php
require "config.php";
if(isset($_POST['action_login'])){
	$identification = $_POST['login'];
	$password = $_POST['password'];
	if($identification == "" || $password == ""){
		$msg = array("Error", "Username / Password Wrong !");
	}else{
		$login = \Fr\LS::login($identification, $password, isset($_POST['remember_me']));
		if($login === false){
			$msg = array("Error", "Username / Password Wrong !");
		}else if(is_array($login) && $login['status'] == "blocked"){
			$msg = array("Error", "Too many login attempts. You can attempt login after ". $login['minutes'] ." minutes (". $login['seconds'] ." seconds)");
		}
	}
}
?>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">    
      <title>Greyfield Realty | Login</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

      <!-- Font awesome -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- Theme color -->
      <link id="switcher" href="../css/theme-color/default-theme.css" rel="stylesheet">     

      <!-- Main style sheet -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/validate.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">      
        <div class="container" style="background-color: black; padding: 5px">
            <a class="navbar-brand aa-logo" href="javascript:void(0)" style="border:2px solid #fff;color: #fff;font-family: "Poppins", sans-serif;font-size: 30px;padding: 15px;line-height: 13px;"> Alan&Grant </a> 
        </div>    
      </div>
      <div class="row">
          <h2 align="center" style="margin-top: 50px;">Log In</h2>
          <?php
          if(isset($msg)){
            echo "<h4 align='center' style='color: #800000'>{$msg[0]}</h4><p align='center' style='color: #800000'>{$msg[1]}</p>";
          }
          ?>
          <form class="cmxform" id="loginForm" action="login.php" method="POST" style="width: 300px; margin: 0 auto; margin-top: 10px;">
            <div class="form-group">
              <label for="userInputEmail">Username / E-Mail</label>
              <input name="login" type="text" class="form-control" id="userInputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="userInputPassword">Password</label>
              <input name="password" type="password" class="form-control" id="userInputPassword" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember_me"> Remember Me
              </label>
            </div>
            <button name="action_login" type="submit" class="btn btn-default">Log In</button>
          </form>
          <div style="width: 300px; margin: 10px auto;">
            <div>
              <p>Don't have an account ? <a href="register.php">Register</a></p>
            </div>
            <div>
              <p>Forgot Your Password ? <a href="reset.php">Reset Password</a></p>
            </div>
          </div>
        </div>
    </div>

        <!-- jQuery library -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="js/jquery.min.js"></script>   
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <!-- For Validation -->
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/app.js"></script>
  </body>
</html>
