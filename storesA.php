<?php
    include "get_item_functions.php";
    include "sort_functions.php";

    
    $stores = read_all_file("stores.csv");
    usort($stores, "name_compare");
    
    function get_stores_by_letter(){
        $stores = read_all_file("stores.csv");
        $names = [];
        foreach($stores as $s){
            if (substr($stores["name"],0,1) ==="A"){
                $name[] = $s;
            }
            $names[] = $name;
        }
        return $names;
    }

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
        <link rel="stylesheet" href="../style/style-header-footer.css">
        <link rel="stylesheet" href="../style/style-index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Roboto&family=Zen+Dots&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <title>All Stores</title>
        <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            float: left;
        }
        .store{
            float: left;
            padding: 20px;
        }
        .section-header{
            padding: 20px;
            text-align: center;
        }
        
    </style>
    </head>
    <body>

    <div class="store-header">
                <div class="store-logo">
                    <a href="../stores home/Chanel-home.html"><img src="https://hyperpix.net/wp-content/uploads/2020/04/chanel-logo-font-free-download-1200x900.jpg" alt="store-logo"></a>
                </div>
                <div class="store-name">
                    <h2>Chanel</h2>
                </div>
                <div class="store-navbar">
                    <div class="mall-home">
                        <a href="../../index.html">Horange Mall</a>
                    </div>
                    <div class="store-home">
                        <a href="../stores home/Chanel-home.html">Home</a>
                    </div>
                    <div class="store-aboutus">
                        <a href="../../sub/store-aboutus.html">About Us</a>
                    </div>
                    <div class="store-product">
                        <div class="store-dropdown">
                            <a href="../store product/Chanel-product.html"><div class="store-dropbtn">Products</div></a>
                            <div class="store-dropdown-content">
                                 <a href="../../sub/store-browsebyname.html">Browse By Name</a>
                                 <a href="../../sub/store-browsebycategory.html">Browse By Category</a>
                            </div>
                        </div>   
                    </div>
                    <div class="store-contact">
                        <a href="../../sub/store-contact.html">Contact</a>
                    </div>
                    <div class="item">
                        <a href="shopping-cart.html">Shopping cart</a>   
                    </div>
                </div>              
            </div>

        </div>
        <div class="container">
        <div class="section-header">
            <h2>Featured Stores</h2>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_stores_by_letter("A"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("1"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("2"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("3"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("4"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("5"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("6"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("7"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("8"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name("9"));?></h4>
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
