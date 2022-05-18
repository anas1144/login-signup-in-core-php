<?php
include('db/db.php');
session_start();

if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit;
} 
   $email=$_SESSION['email'];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up And Login in core PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <?php
        $sql ="SELECT * FROM username WHERE email = '$email'";
        $row = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($row);

        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $uname = $row['username'];
        $email = $row['email'];
        $qualification = $row['qualification'];
        $cno = $row['cno'];
        $address = $row['address'];
        $country = $row['country'];
        $city = $row['city'];
        $dob = $row['dob'];
        $gander = $row['gander'];
        $ms = $row['ms'];
        $pic = $row['img'];
            

?>



    <form action="edituser.php" method="post" enctype="multipart/form-data" onsubmit="return required();">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="opic" value="<?php echo $pic; ?>">
        <div class="container">
            <span class=""><a href="wel.php">back</a></span>
        </div>
        <div class="container">
            <img src="img/<?php echo $pic;?>" style=" width: 120px;height: 120px;border-radius: 50%;" name="opic"
                alt="">
            <input type="file" name="npic" id="file">
        </div>
        <div>
            <span id="message" style="color: red;">
                <?php 
                if(isset($_GET['message'])){
                      $message = $_GET['message'];
                      echo $message;
                } 
          ?>
            </span>
        </div>
        <div class="container">
            <label for="fname">
                <b>First Name</b>
            </label>
            <input type="text" placeholder="Enter First Name" id="fname" name="fname" value="<?php echo $fname; ?>">
            <div>
                <span id="fmessage" style="color: red;">
                    <?php   
                if(isset($_GET['fmessage'])){
                    $fmessage = $_GET['fmessage'];
                    echo $fmessage;
                } 
              ?>
                </span>
            </div>

            <label for="lname">
                <b>Last Name</b>
            </label>
            <input type="text" placeholder="Enter Last Name" id="lname" name="lname" value="<?php echo $lname; ?>">
            <div>
                <span id="lmessage" style="color: red;">
                    <?php 
              if(isset($_GET['lmessage'])){
                      $lmessage = $_GET['lmessage'];
                      echo $lmessage;
              }
            ?>
                </span>
            </div>



            <label for="qualification">
                <b>Qualification</b>
            </label>
            <input type="text" placeholder="Enter Qualification" name="qualification"
                value="<?php echo $qualification; ?>">

            <label for="cno">
                <b>Contact number</b>
            </label>
            <input type="text" placeholder="Enter Contact number" maxlength="11" name="cno" value="<?php echo $cno; ?>">

            <label for="address">
                <b>Address</b>
            </label>
            <input type="text" placeholder="Enter Address" name="address" value="<?php echo $address; ?>">

            <label for="country">
                <b>Country</b>
            </label>
            <select id="select1" name="country" >
                <option value="" disabled>Select The Country</option>
                <option value="Pakistan"<?php if($city == 'Pakistan'){ echo 'selected';}?>>Pakistan</option>
            </select>

            <label for="city">
                <b>city</b>
            </label>
            <select name="city" id="select2" >
                <option value="" disabled>Select The City</option>
                <option value="Islamabad"<?php if($city == 'Islamabad'){ echo 'selected';}?>>Islamabad</option>
                <option value="" disabled>Punjab Cities</option>
                <option value="Ahmed Nager Chatha"<?php if($city == 'Ahmed Nager Chatha'){ echo 'selected';}?>>Ahmed Nager Chatha</option>
                <option value="Ahmadpur East"<?php if($city == 'Ahmadpur East'){ echo 'selected';}?>>Ahmadpur East</option>
              
            </select>

            <label for="dob">
                <b>DOB</b>
            </label>
            <input type="date" placeholder="Enter DOB" name="dob" value="<?php echo $dob; ?>">

            <label for="gander">
                <b>Gander</b>
            </label>
            <br>
            <input type="radio" id="male" name="gander" value="Male" <?php if($gander == 'Male'){ echo 'checked';}?>>
            <label for="html">Male</label>
            <input type="radio" id="female" name="gander" value="Female" <?php if($gander == 'Female'){ echo 'checked';}?>>
            <label for="css">Female</label>
            <br>
            <div>
                <span id="gmessage" style="color: red;">
                    <?php
              if(isset($_GET['gmessage'])){
                    $gmessage = $_GET['gmessage'];
                    echo $gmessage;
              } 
            ?>
                </span>
            </div>

            <label for="ms">
                <b>Martial Status</b>
            </label>
            <select name="ms" id="select3" >
                <option value="" disabled>Marital Status</option>
                <option value="Single"<?php if($ms == 'Single'){ echo 'selected';}?>>Single</option>
                <option value="Married"<?php if($ms == 'Married'){ echo 'selected';}?>>Married</option>
                <option value="Widowed"<?php if($ms == 'Widowed'){ echo 'selected';}?>>Widowed</option>
                <option value="Separated"<?php if($ms == 'Separated'){ echo 'selected';}?>>Separated</option>
                <option value="Divorced" <?php if($ms == 'Divorced'){ echo 'selected';}?>>Divorced</option>
            </select>
            <button type="submit" name="save">Save</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="pass"><a href="wel.php">back</a></span>
        </div>
    </form>
    <!-- // password change -->

    <form action="editpass.php" method="post" onsubmit="return requiredpass();">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="container">
            <h1 style="text-align: center;">Change Password</h1>
        </div>

        <div class="container">
            <label for="opass">
                <b>Old Password*</b>
            </label>
            <input type="password" placeholder="Enter Old Password" id="opass" name="opass">
            <div>
                <span id="opmessage" style="color: red;">
                    <?php
               if(isset($_GET['opmessage'])){
                      $opmessage = $_GET['opmessage'];
                      echo $opmessage;
                      } 
              ?>
                </span>
            </div>

            <label for="npass">
                <b>New Password*</b>
            </label>
            <input type="password" id="npass" placeholder="Enter Password" name="npass">
            <div>
                <span id="npmessage" style="color: red;">
                    <?php
               if(isset($_GET['npmessage'])){
                      $npmessage = $_GET['npmessage'];
                      echo $npmessage;
                } 
              ?>
                </span>
            </div>
            <label for="cnpass">
                <b>Change New Password*</b>
            </label>
            <input type="password" id="cnpass" placeholder="Enter Password" name="cnpass" onkeyup="return check();">
            <div>
                <span id="cnpmessage" style="color: red;">
                    <?php
               if(isset($_GET['cnpmessage'])){
                      $cnpmessage = $_GET['cnpmessage'];
                      echo $cnpmessage;
                } 
              ?>
                </span>
            </div>

            <button type="submit" name="save">Change</button>
        </div>
    </form>
    <script>
    var check = function() {
        if (document.getElementById('npass').value == document.getElementById('cnpass').value) {
            document.getElementById('cnpmessage').style.color = '#046b2f';
            document.getElementById('cnpmessage').innerHTML = 'matching';
        } else {
            document.getElementById('cnpmessage').style.color = 'red';
            document.getElementById('cnpmessage').innerHTML = 'not matching';
        }
    }

    function required() {


        var fmessage = lmessage = gmessage = '';
        var isRequired = false;

        if (document.getElementById('fname').value == '') {

            fmessage = 'required';


        } else {
            fmessage = '';
        }
        if (document.getElementById('lname').value == '') {

            lmessage = 'required';

        } else {
            lmessage = '';
        }
        var male = document.getElementById('male');
        var female = document.getElementById('female');
        if (male.checked == false && female.checked == false) {

            gmessage = 'required';


        } else {
            gmessage = '';
        }


        if (fmessage == '' && lmessage == '' && gmessage == '') {

            isRequired = true;

        } else {

            document.getElementById('fmessage').innerHTML = fmessage;
            document.getElementById('lmessage').innerHTML = lmessage;
            document.getElementById('gmessage').innerHTML = gmessage;
            return isRequired;
        }

    }

    function requiredpass() {


        var opmessage = npmessage = cnpmessage = '';
        var isRequired = false;

        if (document.getElementById('opass').value == '') {

            opmessage = 'required';


        } else if (document.getElementById('opass').value.length < 8) {


            opmessage = 'length must be greater then 7';


        } else {
            opmessage = '';
        }
        if (document.getElementById('npass').value == '') {

            npmessage = 'required';


        } else if (document.getElementById('npass').value.length < 8) {

            npmessage = 'length must be greater then 7';

        } else {
            npmessage = '';
        }
        if (document.getElementById('cnpass').value == '') {

            cnpmessage = 'required';


        } else if (document.getElementById('cnpass').value.length < 8) {

            cnpmessage = 'length must be greater then 7';


        } else {
            cnpmessage = '';
        }

        if (npmessage == '' && npmessage == '' && cnpmessage == '') {

            isRequired = true;

        } else {

            document.getElementById('opmessage').innerHTML = opmessage;
            document.getElementById('npmessage').innerHTML = npmessage;
            document.getElementById('cnpmessage').innerHTML = cnpmessage;
            return isRequired;
        }

    }
    </script>
</body>

</html>