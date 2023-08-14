<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Reqister</title>
    <link rel="icon" type="image/x-icon" href="./C:\xampp\htdocs\Mini_P\img\R2-removebg-preview.png" />
    <link rel="stylesheet" href="./testre.css">
  </head>
  <body>
    <div>
      <div class="logo-img">
        <img id="logo" src="./img/R2-removebg-preview.png" alt="logo" width="6%" style="margin-left: 2% ">
      </div>        
        <div class="sign-up">
          <form action="process.signup.php" method="post" id="signup" novalidate>
            <input type="text" id="fName" name="fname" placeholder="First Name" /><br />
            <!-- <p id="fNameP" class="invalid">
              <b>letters</b> Only (3 leters minimum)
            </p> -->
            

            <input type="text" id="lName" name="lname" placeholder="Last Name" /><br />
            <!-- <p id="lNameP" class="invalid">
              <b>letters</b> Only (3 leters minimum)
            </p> -->
            

            <input type="email" id="email" name="email" placeholder="Email" /><br />
            <!-- <p id="emailP" class="invalid"><b>example@mail.com</b></p> -->


            <input type="password" id="password" name="password" placeholder="Password" /><br />
            <!-- <p id="capitalPass" class="invalid">
              <b>Uppercase</b> letter
              </p>
              <p id="letterPass" class="invalid"><b>lowercase</b> letter</p>
              <p id="numberPass" class="invalid"><b>number</b></p>
              <p id="lengthPass" class="invalid"><b>(8-32) characters</b></p> -->


            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"/><br />
            <!-- <p id="confPassP" class="invalid">
              <b>Must Match with Password</b>
            </p> -->

            <input type="text" id="mobile" name="mobile" placeholder="mobile" /><br />
            
            <input type="date" id="dateInput" name="dateInput" placeholder="date">
            
            <div class="bt" >
            <button id="buttonID" type="submit" value="submit">
              <span>Sign Up</span>
            </button>
            <p class="singInP">Allready have an account? <a href="./login.php" style="text-decoration: none;">logIn</a> </p></div>
          </form>
        </div>
          </div>
    
  </body>
  <!-- <script src="./validation.js"></script> -->
</html>
