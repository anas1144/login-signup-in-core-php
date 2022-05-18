<?php
include('db/db.php');
session_start();



    $email = $_POST['email'];
    if($email == ''){
        $emailErr = 'Email Required';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }

    $pass = $_POST['pass'];
    if($pass == ''){
        $passErr = 'Password Required';
    }
    if(strlen($pass) < 8){
        $passErr = 'Password must be greater then 8 ';
    }

    $pass = md5($pass);
    
        if(isset($_POST['save'])){


            if($emailErr == '' && $passErr == ''){

                $sql ="SELECT * FROM username WHERE email='$email' AND pass= '$pass'";
                $row = mysqli_query($con,$sql);
                if(mysqli_num_rows($row) > 0){

                    $_SESSION['email'] = $email;           
                    header("Location:wel.php?message=Welcome");

                }else{
                    $message ="Rong Email or Password";
                    header("Location:index.php?message=$message");
                }
            }else{
                header("Location:index.php?emessage=$emailErr&pmessage=$passErr");
            }
            
        

        }else{
            header("Location:index.php");
        }

?>