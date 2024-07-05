<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();



    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = null;
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE tbladmin SET code = $code WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            $_SESSION['email'] = $email;
            $_SESSION['info'] = null;

           
            if($update_res){
                echo "<script>alert('hi');</script>";

                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{

                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
            unset  ($_SESSION['info'] );
            
            
        }
    }

    
    //if user click continue button in forgot password form

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php'; // Include PHPMailer autoloader

    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM tbladmin WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE tbladmin SET code = $code WHERE Email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                
                require 'vendor/autoload.php'; // Include PHPMailer autoloader
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                  #  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'almolokgroup2023@gmail.com';
                    $mail->Password   = 'ywhuxutnogdoujan';
                    $mail->Port       = 587;
            
                    //Recipients
                    $mail->setFrom('almolokgroup2023@gmail.com', 'Almolok Group');
                    $mail->addAddress($email);
                    
                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset Code';
                    $mail->Body    = "Your password reset code is $code";
                    $mail->send();
                    echo("ji");

                    $info = "We've sent a password reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                } catch (Exception $e) {
                    $errors['otp-error'] = "Failed while sending code!";
                    error_log("Error sending email: {$mail->ErrorInfo}");
                }
            } else {
                $errors['db-error'] = "Something went wrong!";
            }
        } else {
            $errors['email'] = "This email address does not exist!";
        }
    }
    

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = null;
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM tbladmin WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['Email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location:new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = null;
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{

            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            

            $encpass = $password;
            $update_pass = "UPDATE tbladmin SET code = $code, Password = '$encpass' WHERE Email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                echo '<script language="javascript">alert("Your password changed. Now you can login with your new password.");</script>';  
                echo '<script language="javascript">window.location = "loginpage.php";</script>';  

              #  header('Location:loginpage.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>