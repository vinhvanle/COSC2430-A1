<?php
    include "get_item_functions.php";
    include "sort_functions.php";
    
    $stores = read_all_file("stores.csv");

    session_start();
    if(file_exists("installation.php")){
      die("<script>alert('Please delete installation.php first')</script>");
    }



   
    

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "style/style-header-footer.css">
        <link rel="stylesheet" href="style/style-browse.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <title>Browse By Name</title>
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
                       <a href="../sub/login.html">My Account</a>
                   </div>
                   <div class="dropdown">
                       <a href="" class="dropbtn">Browse</a>
                       <div class="dropdown-content">
                            <a href="../sub/browsebyname.html">Browse By Name</a>
                            <a href="../sub/browsebycategory.html">Browse By Category</a>
                       </div>
                   </div>
                   <div class="item">
                    <a href="shopping-cart.html">Shopping cart</a> 
                </div>
            </div>

        </div>
            <h2>Stores by name</h2>
            <div class="b-name">
                  <ul>
                    <li><a href="../sub/allstores.html">A</a></li>
                    <li><a href="../sub/allstores.html">B</a></li>
                    <li><a href="../sub/allstores.html">C</a></li>
                    <li><a href="../sub/allstores.html">D</a></li>
                  </ul>
                  <ul>
                    <li><a href="../sub/allstores.html">E</a></li>
                    <li><a href="../sub/allstores.html">F</a></li>
                    <li><a href="../sub/allstores.html">G</a></li>
                    <li><a href="../sub/allstores.html">H</a></li>
                    <li><a href="../sub/allstores.html">I</a></li>
                    <li><a href="../sub/allstores.html">J</a></li>
                  </ul>
                  <ul>
                    <li><a href="../sub/allstores.html">K</a></li>
                    <li><a href="../sub/allstores.html">L</a></li>
                    <li><a href="../sub/allstores.html">M</a></li>
                    <li><a href="../sub/allstores.html">N</a></li>
                    <li><a href="../sub/allstores.html">O</a></li>
                    <li><a href="../sub/allstores.html">P</a></li>
                  </ul>
                  <ul>
                    <li><a href="../sub/allstores.html">Q</a></li>
                    <li><a href="../sub/allstores.html">R</a></li>
                    <li><a href="../sub/allstores.html">S</a></li>
                    <li><a href="../sub/allstores.html">T</a></li>
                    <li><a href="../sub/allstores.html">U</a></li>
                    <li><a href="../sub/allstores.html">V</a></li>
                  </ul>
                  <ul>
                    <li><a href="../sub/allstores.html">W</a></li>
                    <li><a href="../sub/allstores.html">X</a></li>
                    <li><a href="../sub/allstores.html">Y</a></li>
                    <li><a href="../sub/allstores.html">Z</a></li>
                    <li><a href="../sub/allstores.html">#</a></li>
                  </ul>
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
        </div>
    </body>
    <div class="cookie-container">
        <p>We use cookies in this website to give you the best experience. Please accept our <a href="https://gdpr-info.eu/"> Terms and conddition</a> before using our site .</p>
        <button class="cookie-btn">
            Agree
        </button>
    </div>
    <script src="../jvs/cookies.js"></script>
</html>
