<?php

    function read_all_file($file_name){
        $fp = fopen($file_name, "r");
        $first = fgetcsv($fp);
        $items = [];
        while ($row = fgetcsv($fp)){
            $i = 0;
            $item = [];
            foreach($first as $col_name){
                $item[$col_name] = $row[$i];
                $i++;
            }
            $items[] = $item;
        }
        return $items;
    }

    function get_item_by_column($file_name,$col_name,$column){
        $items = read_all_file($file_name);
        $list = [];
        foreach ($items as $i){
            if ($i[$col_name] === $column){
                $list[] = $i;
            }
        }
        return $list;
        
    }
   function get_store_name($i){
       $featured_store = get_item_by_column("store.csv");
       return $featured_store[$i]["name"];
   }
    function get_product_name($i){
        $featured_products = get_item_by_column("products.csv", "featured_in_store", "TRUE");
        return $featured_products[$i]["name"];
    }
    
    function get_product_name_by_time($i){
        $product = read_all_file("product.csv");
        sort($product, "data");
        return $product[$i]["name"];
    }

?>