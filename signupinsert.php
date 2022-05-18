<?php
include('db/db.php');
session_start();

session_destroy(); 

        $fname = $_POST['fname'];
        if($fname == ''){
            $fnameErr = 'Required';
        }

        $lname = $_POST['lname'];
        if($lname == ''){
            $lnameErr = 'Required';
        }

        $uname = $_POST['uname'];
        if($uname == ''){
            $unameErr = 'Required';
        }

        $email = $_POST['email'];
        if($email == ''){
            $emailErr = 'Required';
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }

        $pass = $_POST['pass'];
        if($pass == ''){
            $passErr = 'Required';
        }else if(strlen($pass) < 8){
            $passErr = 'Password must be greater then 8 ';
        }

        $cpass = $_POST['cpass'];
        if($cpass == ''){
            $cpassErr = 'Required';
        }else if(strlen($cpass) < 8){
            $cpassErr = 'Password must be greater then 8 ';
        }

        if($pass != $cpass){
            $cpassErr = "password not match";
        }

        $pass = md5($pass);
       
        $qualification = $_POST['qualification'];

        $cno = $_POST['cno'];

        $address = $_POST['address'];

        $country = $_POST['country'];

        $city = $_POST['city'];

        $dob = $_POST['dob'];

        $gander = $_POST['gander'];
        if($gander == ''){
            $ganderErr = 'Required';
        }

        $ms = $_POST['ms'];

        $pic = $_FILES['pic']['name'];
        $picArr = explode('.',$pic);
        $rand = rand(11111,9999);
        $pic = $picArr[0].$rand.'.'.$picArr[1];
        $pic_tmp = $_FILES['pic']['tmp_name'];
        $uploadPath="img/".$pic;
        move_uploaded_file($pic_tmp,$uploadPath);
        
if(isset($_POST['save'])){

   
    if($fnameErr == '' && $lnameErr == '' && $unameErr == '' && $emailErr == '' && $passErr == '' && $cpassErr == ''&& $ganderErr == ''  ){

        $sql = "SELECT * FROM `username` where username = '$uname'";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res) > 0){
            $message = "User Name Already exsist";
            header("Location:signup.php?message=$message");
        }else{
            $sqli = "SELECT * FROM `username` where email = '$email'";
            $rowi = mysqli_query($con,$sqli);
            if(mysqli_num_rows($rowi) > 0){
                $message = "Email Already exsist";
                header("Location:signup.php?message=$message");
            }else{
                 $sqlii = "INSERT INTO `username` (`id`, `fname`, `lname`, `username`, `email`, `pass`, `qualification`,
                `cno`, `address`, `country`, `city`, `dob`, `gander`, `ms`, `img`) VALUES (NULL, '$fname', '$lname', 
                '$uname', '$email', '$pass', '$qualification', '$cno', '$address','$country', '$city', '$dob',
                '$gander', '$ms', '$pic')";
                if (mysqli_query($con, $sqlii)) {
                    $message = "successfully Sign Up";
                    header("Location:signup.php?message=$message");
                } else {
                    echo "Error: "  . mysqli_error($con);
                }
            }
        }
    
          
    }else{
        
        header("Location:signup.php?fmessage=$fnameErr&lmessage=$lnameErr&umessage=$unameErr&emessage=$emailErr&pmessage=$passErr&cpmessage=$cpassErr&gmessage=$ganderErr&");
    }
}

?>