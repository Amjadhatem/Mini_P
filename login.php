<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){

  $mysqli = require __DIR__ . "/database.php";

  $sql = sprintf("SELECT * FROM user
                 WHERE Email = '%s'",
                 $mysqli->real_escape_string($_POST["email"]));

     $result = $mysqli->query($sql);
     $user = $result->fetch_assoc();

     if($user){

      if(password_verify($_POST["password"] , $user["Password"])){
        
        session_start();
        $_SESSION["user_id"] = $user["id"];
        header("Location :index.php");
        exit;
      }
     }
     $is_invalid = true;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Reqister</title>
    <link rel="icon" type="image/x-icon" href="./img/R2-removebg-preview.png" />
    <link rel="stylesheet" href="./login.css">
  </head>
  <body>
    <div>
      <div class="logo-img">
        <img id="logo" src="./img/R2-removebg-preview.png" alt="logo" width="6%" style="margin-left: 2% ">
      </div>    
        <div class="sign-up">

        <!-- <?php if($is_invalid):?> 
        <em>Invalid Login</em>  
        <?php endif; ?> -->

          <form method="post">

            <input type="email" id="email" name="email" placeholder="Email" value = "<?= htmlspecialchars($_POST["email"] ?? "")?>" /><br />
            

            <input type="password" id="password" name="password" placeholder="Password" /><br />
            
            <div class="bt" >
            <button id="buttonID" type="submit" value="submit">
              <span>LogIn</span>
            </button>
            <p class="singInP">Don't have any account <a href="./login.html" style="text-decoration: none;">Sing Up</a> </p></div>
          </form>
        </div>
      </div>
  </body>

</html>
