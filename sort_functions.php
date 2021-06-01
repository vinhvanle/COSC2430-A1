<?php 

    include "get_item_functions.php";
    include "sort_functions.php";

    function date_compare($a, $b)
    {
        $t1 = strtotime($a['created_time']);
        $t2 = strtotime($b['created_time']);
        return $t1 - $t2;
    }    
    
    function name_compare($a, $b){
        return strcmp($a["name"], $b["name"]);
    }

    


?>