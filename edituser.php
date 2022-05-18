<?php
include('db/db.php');

session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit;
} 
   $mail=$_SESSION['email'];

   $id = $_POST['id'];
   $fname = $_POST['fname'];
    if($fname == ''){
        $fnameErr = 'Required';
    }
    $lname = $_POST['lname'];
    if($lname == ''){
        $lnameErr = 'Required';
    }
  
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

   $opic = $_POST['opic'];

   $deletePath="img/".$opic;

        $npic = $_FILES['npic']['name'];
       
        
        if($npic == ''){
            $pic = $opic;
            
        }else{
            $pic = $npic;
            $picArr = explode('.',$pic);
            $rand = rand(11111,9999);
            $pic = $picArr[0].$rand.'.'.$picArr[1];
            $pic_tmp = $_FILES['npic']['tmp_name'];
            $uploadPath="img/".$pic;
            move_uploaded_file($pic_tmp,$uploadPath);
            unlink($deletePath);
        }
        
if(isset($_POST['save'])){

   
    if($fnameErr == '' && $lnameErr == '' && $ganderErr == ''){
        
        $sqlii = "UPDATE `username` SET `fname` = '$fname', `lname` = '$lname',   `qualification` = '$qualification', `cno` = '$cno', 
         `address` = '$address', `country` = '$country', `city` = '$city', `dob` = '$dob', 
         `gander` = '$gander', `ms` = '$ms', `img` = '$pic' WHERE `username`.`id` = $id";
               if (mysqli_query($con, $sqlii)) {
                $message = "successfully Edit";
                
                    header("Location:edit.php?message=$message");
        
                } else {
                  $message = mysqli_error($con);
                  header("Location:edit.php?message=$message");
                }
    
          
    }else{
        header("Location:edit.php?fmessage=$fnameErr&lmessage=$lnameErr&gmessage=$ganderErr&");
    }
}

?>