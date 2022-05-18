<?php
include('db/db.php');

session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit;
}


     $id = $_POST['id'];
     $opass =$_POST['opass'];
     if($opass == ''){
        $opassErr = 'Required';
    }else if(strlen($opass) < 8){
            $opassErr = 'Password must be greater then 8 ';
    }

     $npass =$_POST['npass'];
    if($npass == ''){
        $npassErr = 'Required';
    }else if(strlen($npass) < 8){
            $npassErr = 'Password must be greater then 8 ';
    }

     $cnpass =$_POST['cnpass'];
     if($cnpass == ''){
        $cnpassErr = 'Required';
    }else if(strlen($cnpass) < 8){
            $cnpassErr = 'Password must be greater then 8 ';
    }

    if($npass != $cnpass){
            $cnpassErr = "New password not match";
    }
        $opass =md5($opass);
        $npass =md5($npass);
      
     
        if($opassErr == '' && $npassErr == '' && $cnpassErr == ''){

        $sql ="SELECT * FROM username WHERE id='$id' AND pass= '$opass'";
        $row = mysqli_query($con,$sql);
                if(mysqli_num_rows($row) > 0){
                    if($opass == $npass){
                        $message = "Use defferent password";
                            
                        header("Location:edit.php?message=$message");
                    }else{

                        $sqlii = "UPDATE `username` SET `pass` = '$npass' WHERE `username`.`id` = $id";
                        if (mysqli_query($con, $sqlii)) {
                            $message = "successfully Edit Password";
                            
                            header("Location:edit.php?message=$message");
                    
                        } else {
                            $message = mysqli_error($con);
                            header("Location:edit.php?message=$message");
                        }

                    }


                }else{
                    $message ='Old password not match';
                    header("Location:edit.php?message=$message");
                }

        }else{
            header("Location:edit.php?opmessage=$opassErr&npmessage=$npassErr&cnpmessage=$cnpassErr");
        }

?>