<?php
session_start();

require 'read.php';

if (isset($_SESSION["loggedIn"])) {
  header("Location: profile.php");
}

if(!file_exists("../../account.csv")){
  $fp = fopen("../../account.csv", "w");
  fwrite($fp, "email, password, phone, fname, lname, address, city, zipcode\n");
  fclose($fp);
}

$account = readCSV('../../account.csv');



$fname_error = $lname_error = $password_error = $passwordconfirm_error = $email_error = $phone_error =$address_error =$zip_error = $city_error = '';



$mail_patt = "/^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)*[^\.]\.[A-Za-z]{2,5}$/";
$phone_patt = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/";



if (isset($_POST["submit"])){
   $validation = true;
    if (empty($_POST["fname"])) {
      $validation = false;
      $fname_error = 'Please enter firstname';
    }
    if (empty($_POST["lname"])) {
      $validation = false;
      $lname_error = 'Please enter lastname';
    }
    if (empty($_POST["pass"])) {
      $validation = false;
      $password_error = 'Please enter password';
    }
    if($_POST["pass"]!=$_POST["password_confirm"]){
      $validation = false;
      $passwordconfirm_error = 'Passwords are not matched';
    }
    if (empty($_POST["email"])) {
      $validation = false;
      $email_error = 'Please enter email';
    }
    if (preg_match($phone_patt, $_POST["phone"])) {
      $validation = false;
      $phone_error = 'Please enter phone';
    }
    foreach ($account as $a) {
      if ($_POST["email"] == $a["email"]) {
        $validation = false;
        $email_error= "Email already exist";
      }
      if ($_POST["phone"] == $a[" phone"]) {
        $validation = false;
        $phone_error = "Phone number already registered";
      }
    }
    if (empty($_POST["address"])) {
      $validation = false;
      $address_error = 'Please enter address';
    }
    if (empty($_POST["city"])) {
      $validation = false;
      $city_error = 'Please enter city';
    }
    if (empty($_POST["zip"])) {
      $validation = false;
      $zip_error = 'Please enter zip';
    }
    if($validation){
        $hash = password_hash($_POST["pass"],1);
        $fp= fopen("../../account.csv","a");
        fwrite($fp,"{$_POST['email']},{$hash},{$_POST['phone']},{$_POST['fname']},{$_POST['lname']},{$_POST['address']},{$_POST['city']},{$_POST['zip']}\n");
        fclose($fp);
        header("Location: login.php");
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../style/Style-account.css">
    <link rel="stylesheet" href="../style/style-header-footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="grid">
    <div class="header">
        <div class="logo">
            <a href="../index.html"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <div class="slogan">
            <p>Horange Mall</p>
        </div>
        <div class="nav-bar">
           <div class="item">
               <a href="../index.html">Home</a>
           </div>
           <div class="item">
               <a href="../sub/aboutus.html">About Us</a>
           </div>
           <div class="item">
               <a href="../sub/fees.html">Fees</a>
           </div>
           <div class="item">
               <a href="../sub/contact.html">Contact</a>
           </div>
           <div class="item">
               <a href="../sub/faqs.html">FAQs</a>
           </div>
           <div class="item">
               <a href="../sub/login.php">My Account</a>
           </div>
           <div class="dropdown">
               <a href="" class="dropbtn">Browse</a>
               <div class="dropdown-content">
                    <a href="../sub/browsebyname.html">Browse By Name</a>
                    <a href="../sub/browsebycategory.html">Browse By Category</a>
               </div>
           </div>
        </div>
    </div>
  </div>
  <form class="" action="" method="post">
    <div class="sign-form">
      <img src="../img/logo.png" alt="logo">
      <div class="inner-box">
          <h1>Sign Up </h1>
          <input type="text" name="fname" placeholder="Your first name" class ="signup-box " >
          <br>
        <span name="fname-error" class = "error" ><?php echo $fname_error  ?></span>

          <input type="text" name="lname" placeholder="Your last name" class ="signup-box" >
          <br>
        <span name="lname-error" class = "error"><?php echo $lname_error  ?></span>

          <input type="email" name="email" placeholder="Your email adress" class ="signup-box">

          <br>
        <span name="email-error" class = "error"><?php echo $email_error  ?></span>
                  <br>

          <input type="text" name="phone" placeholder="Your phone number" class ="signup-box" pattern="[0-9]{10}">
          <br>
        <span name="phone_error" class = "error"><?php echo $phone_error  ?></span>

          <div id="password_div" class = "password_element">
          <input type="password" placeholder="Your password" name ="pass" class ="signup-box" name = "password-field">
          <br>
          <span name="password-error" class = "error"></span>
          <div class="toggle-password">
            <i class="fa fa-eye"></i>
            <i class="fa fa-eye-slash"></i>
          </div>
          <div class="password-policies">
        <div class="policy-length">
          8-20 characters
        </div>
        <div class="policy-number">
          Contains Number
        </div>
        <div class="policy-uppercase">
          Contains Uppercase
        </div>
        <div class="policy-lowercase">
          Contains Lowercase
        </div>
        <div class="policy-special">
          Contains Special Characters
        </div>
      </div>
        </div>


          <input type="password" name="password_confirm" placeholder="Confirm password" name = "password_confirm" class ="signup-box">
          <br>
          <span name="passwordconfirm-error" class = "error" ><?php echo $passwordconfirm_error  ?></span>

          <input type="text" name="address" placeholder="Your address" class="signup-box">
          <br>
        <span name="address-error" class = "error" ><?php echo $address_error  ?></span>

          <input type="text" name="city" placeholder="Your city" class="signup-box">
          <br>
        <span name="city-error" class = "error"><?php echo $city_error  ?></span>

          <input type="number" name="zip" placeholder="ZIP code" class="signup-box">
          <br>
        <span name="zip-error" class = "error"><?php echo $zip_error  ?></span>

          </div>
          <div class="country">
            <label for="country">Please select your country:</label>
            <select class="country" name="">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BH">Bahamas</option
                  <option value="BS">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, The Democratic Republic of The</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D'ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MN">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NC">Netherlands Antilles</option>
                  <option value="NZ">New Caledonia</option>
                  <option value="NI">New Zealand</option>
                  <option value="NE">Nicaragua</option>
                  <option value="NG">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RO">Russian Federation</option>
                  <option value="RU">Rwanda</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and The Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and The South Sandwich Islands</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SK">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.S.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
            </select>
            </div>
          <button type="submit"  class="sign-button" name="submit">Sign up
          </button>
        </form>
          <hr>
          <p><span>Already register?</span><a href="../sub/login.php"  class="und" > Sign In</a></p>
          <br>
      </div>
      <div class="footer">
        <div class="copyrights">
            <a href="../sub/copyrights.html"><span>&copy;</span>Horange. All Rights Reserved</a>
        </div>
        <div class="tos">
            <a href="../sub/tos.html">Terms of Service</a>
        </div>
        <div class="privacy">
            <a href="../sub/privacy.html">Privacy Policies</a>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
    <script src="../jvs/register.js"></script>

  </body>
  </html>
