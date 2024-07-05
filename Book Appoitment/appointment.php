<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$con=mysqli_connect("localhost", "root", "", "bpmsdb");

if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['date'];

    $time=$_POST['time'];
    $atime=$format= date('h:i', strtotime($time));

    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='#'</script>";	
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
} 

?>



















<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Appointment</title>
    <link rel="stylesheet" href="styleforappointment.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/all.min.css" />

    <!---------------------------------------------------------------------->
  </head>
 <!--  Monday to Friday: Saturday: 9:00 – 5:00 PM Sunday: 9:00 – 3:00 PM We always
  open -->

  <body>
    <div class="container">
      <div class="container-time">
        <h2 class="heading">Time open</h2>
        <h3 class="heading-days">Monday-Friday</h3>
        <p>9:00 – 6:00 PM</p>

        <h3 class="heading-days">Saturday</h3>
        <p>9:00 – 5:00 PM</p>
        <h3 class="heading-days">Sunday</h3>
        <p>9:00 – 3:00 PM</p>

        <hr />

        <h4 class="heading-phone">Call Us: (059) 996-5721</h4>
      </div>

      <div class="container-form">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="appointment-form">
          <h2 class="heading heading-yellow">Reservation Online</h2>

          <div class="form-field">
            <p>Your Name</p>
            <input type="text" placeholder="Your Name" id="name" name="name" required="true" />
          </div>

          <div class="form-field">
            <p>Your email</p>
            <input type="text" placeholder="Your email"  id="email" name="email" required="true" />
          </div>
          <div class="form-field">
            <p>Your phone</p>
            <input type="tel" id="phone" name="phone" pattern="\0599\d{6}" required>
          </div>

          <div class="form-field">
            <p>Date</p>
            <input type="date"  id="date" name="date" required="true"/>
          </div>

          <div class="form-field">
            <p>Time</p>
            <input type="time"  id="time" name="time" required="true" />
            
          </div>

          <div class="form-field">
            <p>Services</p>
            <select name="services" id="services" required="true" >
		                      	<option value="">Select Services</option>
                            
		                      	<?php
                            $con=mysqli_connect("localhost", "root", "", "bpmsdb");

                            $query=mysqli_query($con,"select * from tblservices");
              while($row=mysqli_fetch_array($query))
              {
              ?>
		                       <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
		                       <?php } ?> 
		                      </select>
          </div>

          <button class="btn" name="submit" >Submit</button>
        </form>
        <div class="icon">
          <a href="../Home/index.php">
            <img src="home.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
