<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bpmsaid']=$ret['ID'];
     header('location:../DashBoard/dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login In</title>
    <!--font awsome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"
      integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lock-solid.svg" />
    <link rel="stylesheet" href="person-solid.svg" />
    <link rel="stylesheet" href="styleforloginpage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/all.min.css" />

    <!--end of fontawsome-->
    <!---------------------------------------------------------------------->
  </head>

  <body>
    <div class="container">
      <div class="form-box">
        <div class="form-value">
          <form role="form" method="post" action="">
            <h2>Login</h2>
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
            <div class="inputbox">
              <i class="fa-solid fa-person fa-beat"></i>
              <input type="username" required  name="username"/>
              <label for="">Username</label>
            </div>
            <div class="inputbox">
              <div id="show_hide">
              <i id="unlock" class="fa-solid fa-unlock fa-beat " style="color: #ab8f52; display:none;"></i>
              <i id="lock" class="fa-solid fa-lock fa-beat  "></i>
              </div>
              <input type="password" required  name="password" id="password"/>
              <label for="">Password</label>

           


            </div>
            <button name="login">Log in</button>
            <div class="bottom">
              <!-- <div class="left">
                 <input type="checkbox" id="remember_me"  name="remember_me" value="1"/>
                <label for="check">Remeber Me</label> 
              </div> -->


       



              
              <div class="right">
                <label><a href="forgot-password.php">Forgot Password?</a></label>
              </div>
            </div>
          </form>
          <div class="icon">
            <a href="../Home/index.php">
              <img src="home.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  
    <script>
              const lock = document.getElementById("lock");
              const unlock = document.getElementById("unlock");
              const passInput= document.getElementById("password");


             lock.addEventListener("click", function() {
               lock.style.display = "none";
              unlock.style.display = "inline-block";
              passInput.type="text";
                });

                unlock.addEventListener("click", function() {
                  unlock.style.display = "none";
                  lock.style.display = "inline-block";
                 
                  passInput.type="password";

});


               


              </script>
  </body>
</html>
