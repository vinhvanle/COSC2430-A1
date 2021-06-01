<?php 
    include "get_item_functions.php";
    include "sort_functions.php";


    $category = read_all_file("categories.csv");
    $mapping = [
        'Department stores' => 'department',
        'Grocery stores' => 'grocery',
        'Restaurants' => 'restaurant',
        'Clothing stores' => 'clothing',
        'Accessory stores' => 'accessory',
        'Pharmacies' => 'pharmacies',
        'Technology stores' => 'technology',
        'Pet stores' => 'pet',
        'Toy stores' => 'toy',
        'Specialty stores' => 'specialty',
        'Thrift stores' => 'thrift',
        'Services' => 'services',
        'Kiosks' => 'kiosks',
    ];

    $selected_category = 'department';
    if (isset($_GET['sort_by']) && !empty($_GET['sort_by'])){
        $selected_category = $mapping[$_GET['sort_by']];
    }

    session_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Browse By Category</title>
    </head>
    <body>
        <select name="sort_by" id="sort_by">
            <option value="department">Department stores</option>
            <option value="grocery">Grocery stores</option>
            <option value="restaurant">Restaurants</option>
            <option value="clothing">Clothing stores</option>
            <option value="accessory">Clothing stores</option>
            <option value="pharmacies">Pharmacies</option>
            <option value="technology">Technology stores</option>
            <option value="pet">Pet stores</option>
            <option value="toy">Toy stores</option>
            <option value="thrift">Thrift stores</option>
            <option value="services">Services</option>
            <option value="kiosks">Kiosks</option>
        </select>
    </body>
    </html>
    

 
?>