<?php
include "config.php";
?>
<!DOCTYPE html>
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
      <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

      <!-- Main style sheet -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/validate.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">      
        <div class="container" style="background-color: black; padding: 5px">
            <a class="navbar-brand aa-logo" href="javascript:void(0)" style="border:2px solid #fff;color: #fff;font-family: "Poppins", sans-serif;font-size: 30px;padding: 15px;line-height: 13px;"> Greyfield <span>Realty</span></a> 
        </div>    
      </div>
      <div class="row">
          <h2 align="center" style="margin-top: 50px;">Register</h2>
            <?php
              if( isset($_POST['action_reg']) ){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $retyped_password = $_POST['retyped_password'];
                $name = $_POST['name'];
                if( $username == "" || $email == "" || $password == '' || $retyped_password == '' || $name == '' ){
                    echo "<h4 align='center' style='color: #800000'>Fields Left Blank</h4>", "<p align='center' style='color: #800000'>Some Fields were left blank. Please fill up all fields.</p>";
                }elseif( !\Fr\LS::validEmail($email) ){
                    echo "<h2 align='center' style='color: #800000'>E-Mail Is Not Valid</h2>", "<p>The E-Mail you gave is not valid</p>";
                }elseif( !ctype_alnum($username) ){
                    echo "<h2 align='center' style='color: #800000'>Invalid Username</h2>", "<p>The Username is not valid. Only ALPHANUMERIC characters are allowed and shouldn't exceed 10 characters.</p>";
                }elseif($password != $retyped_password){
                    echo "<h2 align='center' style='color: #800000'>Passwords Don't Match</h2>", "<p>The Passwords you entered didn't match</p>";
                }else{
                  $createAccount = \Fr\LS::register($username, $password,
                    array(
                      "email" => $email,
                      "name" => $name,
                      "created" => date("Y-m-d H:i:s") // Just for testing
                    )
                  );
                  if($createAccount === "exists"){
                    echo "<p align='center' style='color: #800000'>User Exists.</p>";
                  }elseif($createAccount === true){
                    echo "<p align='center' style='color: #008000'>Successfully created your account. <a href='login.php'>Click here to Log In</a></p>";
                  }
                }
              }
            ?>
          <form class="cmxform" id="regForm" action="register.php" method="POST" style="width: 300px; margin: 0 auto; margin-top: 10px;">
            <div class="form-group">
              <label for="usernameInput">Username</label>
              <input name="username" type="text" class="form-control" id="usernameInput" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="userInputEmail">E-Mail</label>
              <input name="email" type="text" class="form-control" id="userInputEmail" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="userInputPassword1">Password</label>
              <input name="pass" type="password" class="form-control" id="userInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="userInputPassword2">Password</label>
              <input name="retyped_password" type="password" class="form-control" id="userInputPassword2" placeholder="Retype Password">
            </div>
            <div class="form-group">
              <label for="nameInput">Name</label>
              <input name="name" type="text" class="form-control" id="nameInput" placeholder="Name">
            </div>
            <button name="action_reg" type="submit" class="btn btn-default">Register</button>
          </form>
          <div style="width: 300px; margin: 10px auto;">
            <div>
              <p>Already Registered ? <a href="login.php">Login</a></p>
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
