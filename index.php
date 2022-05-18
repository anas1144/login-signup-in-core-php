<?php

session_start();

session_destroy(); 

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
    <form action="login.php" method="post" onsubmit="return required();">
        <div class="container">
            <h1 style="text-align: center;">Login</h1>
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
            <label for="uname">
                <b>Email*</b>
            </label>
            <input type="email" placeholder="Enter Email" id="email" name="email">
            <div>
                <span id="emessage" style="color:red">
                    <?php
             if(isset($_GET['emessage'])){
                    $emessage = $_GET['emessage'];
                    echo $emessage;
              } 
            ?>
                </span>
            </div>

            <label for="pass">
                <b>Password*</b>
            </label>
            <input type="password" placeholder="Enter Password" id="pass" name="pass">
            <div>
                <span id="pmessage" style="color: red;">
                    <?php
           if(isset($_GET['pmessage'])){
                    $pmessage = $_GET['pmessage'];
                    echo $pmessage;
            } 
          ?>
                </span>
            </div>

            <button type="submit" name="save">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="pass">
                <a href="signup.php">Sign Up</a>
            </span>
        </div>
    </form>
    <script>
    function required() {

        var emessage = '';
        var pmessage = '';
        var isRequired = false;

        if (document.getElementById('email').value == '') {

            emessage = 'required';


        } else {
            emessage = '';
        }

        if (document.getElementById('pass').value == '') {

            pmessage = 'required';


        } else if (document.getElementById('pass').value.length < 8) {

            pmessage = 'length must be greater then 7';


        } else {

            pmessage = '';

        }




        if (emessage == '' && pmessage == '') {

            isRequired = true;

        } else {

            document.getElementById('emessage').innerHTML = emessage;
            document.getElementById('pmessage').innerHTML = pmessage;
            return isRequired;
        }

    }
    </script>
</body>

</html>