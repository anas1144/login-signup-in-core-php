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
    <form action="signupinsert.php" method="post" name="form" enctype="multipart/form-data"
        onsubmit="return required();">
        <div class="container">
            <h1 style="text-align: center;">Sign Up</h1>
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
                <b>First Name*</b>
            </label>
            <input type="text" placeholder="Enter First Name" id="fname" name="fname">
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
                <b>Last Name*</b>
            </label>
            <input type="text" placeholder="Enter Last Name" id="lname" name="lname">
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

            <label for="uname">
                <b>User Name*(unique)</b>
            </label>
            <input type="text" placeholder="Enter username" id="uname" name="uname">
            <div>
                <span id="umessage" style="color: red;">
                    <?php
           if(isset($_GET['umessage'])){
                  $umessage = $_GET['umessage'];
                  echo $umessage;
            } 
          ?>
                </span>
            </div>

            <label for="email">
                <b>Email*(unique)</b>
            </label>
            <input type="email" placeholder="Enter Email" id="email" name="email">
            <div>
                <span id="emessage" style="color: red;">
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
            <input type="password" id="pass" placeholder="Enter Password" name="pass">
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

            <label for="cpass">
                <b>Confirm Password*</b>
            </label>
            <input type="password" id="cpass" placeholder="Enter Confirm Password" name="cpass"
                onkeyup="return check();">
            <div>
                <span id="cpmessage" style="color: red;">
                    <?php
             if(isset($_GET['cpmessage'])){
                  $cpmessage = $_GET['cpmessage'];
                  echo $cpmessage;
             } 
            ?>
                </span>
            </div>

            <label for="qualification">
                <b>Qualification</b>
            </label>
            <input type="text" placeholder="Enter Qualification" name="qualification">

            <label for="cno">
                <b>Contact number</b>
            </label>
            <input type="text" placeholder="Enter Contact number" mixlength="11" name="cno">

            <label for="address">
                <b>Address</b>
            </label>
            <input type="text" placeholder="Enter Address" name="address">

            <label for="country">
                <b>Country</b>
            </label>
            <select id="select1" name="country">
                <option value="" disabled selected>Select The Country</option>
                <option value="Pakistan">Pakistan</option>
            </select>

            <label for="city">
                <b>city</b>
            </label>
            <select name="city" id="select2">
                <option value="" disabled selected>Select The City</option>
                <option value="Islamabad">Islamabad</option>
                <option value="" disabled>Punjab Cities</option>
                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                <option value="Ahmadpur East">Ahmadpur East</option>
                <option value="Ali Khan Abad">Ali Khan Abad</option>
                <option value="Alipur">Alipur</option>
                <option value="Arifwala">Arifwala</option>
                <option value="Attock">Attock</option>
                <option value="Bhera">Bhera</option>
                <option value="Bhalwal">Bhalwal</option>
                <option value="Bahawalnagar">Bahawalnagar</option>
                <option value="Bahawalpur">Bahawalpur</option>
                <option value="Bhakkar">Bhakkar</option>
                <option value="Burewala">Burewala</option>
                <option value="Chillianwala">Chillianwala</option>
                <option value="Chakwal">Chakwal</option>
                <option value="Chichawatni">Chichawatni</option>
                <option value="Chiniot">Chiniot</option>
                <option value="Chishtian">Chishtian</option>
                <option value="Daska">Daska</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                <option value="Dhaular">Dhaular</option>
                <option value="Dina">Dina</option>
                <option value="Dinga">Dinga</option>
                <option value="Dipalpur">Dipalpur</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Ferozewala">Ferozewala</option>
                <option value="Fateh Jhang">Fateh Jang</option>
                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                <option value="Gojra">Gojra</option>
                <option value="Gujranwala">Gujranwala</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Gujar Khan">Gujar Khan</option>
                <option value="Hafizabad">Hafizabad</option>
                <option value="Haroonabad">Haroonabad</option>
                <option value="Hasilpur">Hasilpur</option>
                <option value="Haveli Lakha">Haveli Lakha</option>
                <option value="Jatoi">Jatoi</option>
                <option value="Jalalpur">Jalalpur</option>
                <option value="Jattan">Jattan</option>
                <option value="Jampur">Jampur</option>
                <option value="Jaranwala">Jaranwala</option>
                <option value="Jhang">Jhang</option>
                <option value="Jhelum">Jhelum</option>
                <option value="Kalabagh">Kalabagh</option>
                <option value="Karor Lal Esan">Karor Lal Esan</option>
                <option value="Kasur">Kasur</option>
                <option value="Kamalia">Kamalia</option>
                <option value="Kamoke">Kamoke</option>
                <option value="Khanewal">Khanewal</option>
                <option value="Khanpur">Khanpur</option>
                <option value="Kharian">Kharian</option>
                <option value="Khushab">Khushab</option>
                <option value="Kot Addu">Kot Addu</option>
                <option value="Jauharabad">Jauharabad</option>
                <option value="Lahore">Lahore</option>
                <option value="Lalamusa">Lalamusa</option>
                <option value="Layyah">Layyah</option>
                <option value="Liaquat Pur">Liaquat Pur</option>
                <option value="Lodhran">Lodhran</option>
                <option value="Malakwal">Malakwal</option>
                <option value="Mamoori">Mamoori</option>
                <option value="Mailsi">Mailsi</option>
                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                <option value="Mian Channu">Mian Channu</option>
                <option value="Mianwali">Mianwali</option>
                <option value="Multan">Multan</option>
                <option value="Murree">Murree</option>
                <option value="Muridke">Muridke</option>
                <option value="Mianwali Bangla">Mianwali Bangla</option>
                <option value="Muzaffargarh">Muzaffargarh</option>
                <option value="Narowal">Narowal</option>
                <option value="Nankana Sahib">Nankana Sahib</option>
                <option value="Okara">Okara</option>
                <option value="Renala Khurd">Renala Khurd</option>
                <option value="Pakpattan">Pakpattan</option>
                <option value="Pattoki">Pattoki</option>
                <option value="Pir Mahal">Pir Mahal</option>
                <option value="Qaimpur">Qaimpur</option>
                <option value="Qila Didar Singh">Qila Didar Singh</option>
                <option value="Rabwah">Rabwah</option>
                <option value="Raiwind">Raiwind</option>
                <option value="Rajanpur">Rajanpur</option>
                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Sadiqabad">Sadiqabad</option>
                <option value="Safdarabad">Safdarabad</option>
                <option value="Sahiwal">Sahiwal</option>
                <option value="Sangla Hill">Sangla Hill</option>
                <option value="Sarai Alamgir">Sarai Alamgir</option>
                <option value="Sargodha">Sargodha</option>
                <option value="Shakargarh">Shakargarh</option>
                <option value="Sheikhupura">Sheikhupura</option>
                <option value="Sialkot">Sialkot</option>
                <option value="Sohawa">Sohawa</option>
                <option value="Soianwala">Soianwala</option>
                <option value="Siranwali">Siranwali</option>
                <option value="Talagang">Talagang</option>
                <option value="Taxila">Taxila</option>
                <option value="Toba Tek Singh">Toba Tek Singh</option>
                <option value="Vehari">Vehari</option>
                <option value="Wah Cantonment">Wah Cantonment</option>
                <option value="Wazirabad">Wazirabad</option>
                <option value="" disabled>Sindh Cities</option>
                <option value="Badin">Badin</option>
                <option value="Bhirkan">Bhirkan</option>
                <option value="Rajo Khanani">Rajo Khanani</option>
                <option value="Chak">Chak</option>
                <option value="Dadu">Dadu</option>
                <option value="Digri">Digri</option>
                <option value="Diplo">Diplo</option>
                <option value="Dokri">Dokri</option>
                <option value="Ghotki">Ghotki</option>
                <option value="Haala">Haala</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Islamkot">Islamkot</option>
                <option value="Jacobabad">Jacobabad</option>
                <option value="Jamshoro">Jamshoro</option>
                <option value="Jungshahi">Jungshahi</option>
                <option value="Kandhkot">Kandhkot</option>
                <option value="Kandiaro">Kandiaro</option>
                <option value="Karachi">Karachi</option>
                <option value="Kashmore">Kashmore</option>
                <option value="Keti Bandar">Keti Bandar</option>
                <option value="Khairpur">Khairpur</option>
                <option value="Kotri">Kotri</option>
                <option value="Larkana">Larkana</option>
                <option value="Matiari">Matiari</option>
                <option value="Mehar">Mehar</option>
                <option value="Mirpur Khas">Mirpur Khas</option>
                <option value="Mithani">Mithani</option>
                <option value="Mithi">Mithi</option>
                <option value="Mehrabpur">Mehrabpur</option>
                <option value="Moro">Moro</option>
                <option value="Nagarparkar">Nagarparkar</option>
                <option value="Naudero">Naudero</option>
                <option value="Naushahro Feroze">Naushahro Feroze</option>
                <option value="Naushara">Naushara</option>
                <option value="Nawabshah">Nawabshah</option>
                <option value="Nazimabad">Nazimabad</option>
                <option value="Qambar">Qambar</option>
                <option value="Qasimabad">Qasimabad</option>
                <option value="Ranipur">Ranipur</option>
                <option value="Ratodero">Ratodero</option>
                <option value="Rohri">Rohri</option>
                <option value="Sakrand">Sakrand</option>
                <option value="Sanghar">Sanghar</option>
                <option value="Shahbandar">Shahbandar</option>
                <option value="Shahdadkot">Shahdadkot</option>
                <option value="Shahdadpur">Shahdadpur</option>
                <option value="Shahpur Chakar">Shahpur Chakar</option>
                <option value="Shikarpaur">Shikarpaur</option>
                <option value="Sukkur">Sukkur</option>
                <option value="Tangwani">Tangwani</option>
                <option value="Tando Adam Khan">Tando Adam Khan</option>
                <option value="Tando Allahyar">Tando Allahyar</option>
                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                <option value="Thatta">Thatta</option>
                <option value="Umerkot">Umerkot</option>
                <option value="Warah">Warah</option>
                <option value="" disabled>Khyber Cities</option>
                <option value="Abbottabad">Abbottabad</option>
                <option value="Adezai">Adezai</option>
                <option value="Alpuri">Alpuri</option>
                <option value="Akora Khattak">Akora Khattak</option>
                <option value="Ayubia">Ayubia</option>
                <option value="Banda Daud Shah">Banda Daud Shah</option>
                <option value="Bannu">Bannu</option>
                <option value="Batkhela">Batkhela</option>
                <option value="Battagram">Battagram</option>
                <option value="Birote">Birote</option>
                <option value="Chakdara">Chakdara</option>
                <option value="Charsadda">Charsadda</option>
                <option value="Chitral">Chitral</option>
                <option value="Daggar">Daggar</option>
                <option value="Dargai">Dargai</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                <option value="Doaba">Doaba</option>
                <option value="Dir">Dir</option>
                <option value="Drosh">Drosh</option>
                <option value="Hangu">Hangu</option>
                <option value="Haripur">Haripur</option>
                <option value="Karak">Karak</option>
                <option value="Kohat">Kohat</option>
                <option value="Kulachi">Kulachi</option>
                <option value="Lakki Marwat">Lakki Marwat</option>
                <option value="Latamber">Latamber</option>
                <option value="Madyan">Madyan</option>
                <option value="Mansehra">Mansehra</option>
                <option value="Mardan">Mardan</option>
                <option value="Mastuj">Mastuj</option>
                <option value="Mingora">Mingora</option>
                <option value="Nowshera">Nowshera</option>
                <option value="Paharpur">Paharpur</option>
                <option value="Pabbi">Pabbi</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Saidu Sharif">Saidu Sharif</option>
                <option value="Shorkot">Shorkot</option>
                <option value="Shewa Adda">Shewa Adda</option>
                <option value="Swabi">Swabi</option>
                <option value="Swat">Swat</option>
                <option value="Tangi">Tangi</option>
                <option value="Tank">Tank</option>
                <option value="Thall">Thall</option>
                <option value="Timergara">Timergara</option>
                <option value="Tordher">Tordher</option>
                <option value="" disabled>Balochistan Cities</option>
                <option value="Awaran">Awaran</option>
                <option value="Barkhan">Barkhan</option>
                <option value="Chagai">Chagai</option>
                <option value="Dera Bugti">Dera Bugti</option>
                <option value="Gwadar">Gwadar</option>
                <option value="Harnai">Harnai</option>
                <option value="Jafarabad">Jafarabad</option>
                <option value="Jhal Magsi">Jhal Magsi</option>
                <option value="Kacchi">Kacchi</option>
                <option value="Kalat">Kalat</option>
                <option value="Kech">Kech</option>
                <option value="Kharan">Kharan</option>
                <option value="Khuzdar">Khuzdar</option>
                <option value="Killa Abdullah">Killa Abdullah</option>
                <option value="Killa Saifullah">Killa Saifullah</option>
                <option value="Kohlu">Kohlu</option>
                <option value="Lasbela">Lasbela</option>
                <option value="Lehri">Lehri</option>
                <option value="Loralai">Loralai</option>
                <option value="Mastung">Mastung</option>
                <option value="Musakhel">Musakhel</option>
                <option value="Nasirabad">Nasirabad</option>
                <option value="Nushki">Nushki</option>
                <option value="Panjgur">Panjgur</option>
                <option value="Pishin Valley">Pishin Valley</option>
                <option value="Quetta">Quetta</option>
                <option value="Sherani">Sherani</option>
                <option value="Sibi">Sibi</option>
                <option value="Sohbatpur">Sohbatpur</option>
                <option value="Washuk">Washuk</option>
                <option value="Zhob">Zhob</option>
                <option value="Ziarat">Ziarat</option>
            </select>

            <label for="dob">
                <b>DOB</b>
            </label>
            <input type="date" placeholder="Enter DOB" name="dob">

            <label for="gander">
                <b>Gander*</b>
            </label>
            <br>
            <input type="radio" id="male" name="gander" value="Male">
            <label for="html">Male</label>
            <input type="radio" id="female" name="gander" value="Female">
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
            <select name="ms" id="select3">
                <option value="" disabled selected>Marital Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Divorced">Divorced</option>
            </select>
            <label for="pic">
                <b>Select Photo</b>
            </label>
            <input type="file" name="pic" id="file">
            <button type="submit" name="save">Sign Up</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="pass">
                <a href="index.php">Login</a>
            </span>
        </div>
    </form>


    <script>
    var check = function() {
        if (document.getElementById('pass').value ==
            document.getElementById('cpass').value) {
            document.getElementById('cpmessage').style.color = '#046b2f';
            document.getElementById('cpmessage').innerHTML = 'matching';
        } else {
            document.getElementById('cpmessage').style.color = 'red';
            document.getElementById('cpmessage').innerHTML = 'not matching';
        }
    }

    function required() {


        var fmessage = lmessage = umessage = emessage = pmessage = cpmessage = gmessage = '';
        var isRequired = false;

        if (document.getElementById('fname').value == '') {

            fmessage = 'required';

        } else {
            fmeassge = '';
        }

        if (document.getElementById('lname').value == '') {

            lmessage = 'required';


        } else {
            lmessage = '';
        }

        if (document.getElementById('uname').value == '') {

            umessage = 'required';

        } else {
            umessage = '';
        }

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

        if (document.getElementById('cpass').value == '') {

            cpmessage = 'required';


        } else if (document.getElementById('cpass').value.length < 8) {

            cpmessage = 'length must be moore the 7';


        } else {
            gmessage = '';
        }

        var male = document.getElementById('male');
        var female = document.getElementById('female');

        if (male.checked == false && female.checked == false) {

            gmessage = 'required';


        } else {
            gmessage = '';
        }



        if (fmessage == '' && lmessage == '' && umessage == '' && emessage == '' && pmessage == '' && cpmessage == '' &&
            gessage == '') {

            isRequired = true;

        } else {

            document.getElementById('fmessage').innerHTML = fmessage;
            document.getElementById('lmessage').innerHTML = lmessage;
            document.getElementById('umessage').innerHTML = umessage;
            document.getElementById('emessage').innerHTML = emessage;
            document.getElementById('pmessage').innerHTML = pmessage;
            document.getElementById('cpmessage').innerHTML = cpmessage;
            document.getElementById('gmessage').innerHTML = gmessage;
            return isRequired;
        }
    }
    </script>
</body>

</html>