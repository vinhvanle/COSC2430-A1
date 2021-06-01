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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-header-footer.css">
    <link rel="stylesheet" href="style/style-index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Roboto&family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Horange Home Paget</title>
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
    <div class="grid">

        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="slogan">
                <p>Horange Mall</p>
            </div>
            <div class="nav-bar">
            <div class="item">
                <a href="index.html">Home</a>
            </div>
            <div class="item">
                <a href="sub/aboutus.html">About Us</a>
            </div>
            <div class="item">
                <a href="sub/fees.html">Fees</a>
            </div>
            <div class="item">
                <a href="sub/contact.html">Contact</a>
            </div>
            <div class="item">
                <a href="sub/faqs.html">FAQs</a>
            </div>
            <div class="item">
                <a href="sub/login.html">My Account</a>
            </div>
            <div class="dropdown">
                <a href="" class="dropbtn">Browse</a>
                <div class="dropdown-content">
                        <a href="browsebyname.php">Browse By Name</a>
                        <a href="sub/browsebycategory.html">Browse By Category</a>
                </div>
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
                <h4><?php echo(get_store_name("0"));?></h4>
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

    <div class="container">
        <div class="section-header">
            <h2>Featured Products</h2>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("0"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("1"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("2"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("3"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("4"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("5"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("6"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("7"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("8"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name("9"));?></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-header">
            <h2>New Stores</h2>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("0"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("1"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("2"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("3"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("4"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("5"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("6"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("7"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("8"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_store_name_by_time("9"));?></h4>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="section-header">
            <h2>New Products</h2>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("0"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("1"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("2"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("3"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("4"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("5"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("6"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("7"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("8"));?></h4>
            </div>
        </div>
        <div class="store">
            <div class="img-container">
                <img src="img/logo.svg" alt="photo">
            </div>
            <div class="name">
                <h4><?php echo(get_product_name_by_time("9"));?></h4>
            </div>
        </div>
    </div>        

    
</body>
</html>