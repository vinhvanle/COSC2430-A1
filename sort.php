<?php 
    function date($a, $b)
    {
        $t1 = strtotime($a['created_time']);
     
        return $t1 
    }    
    
    function name_compare($a){
        return strcmp($a["name"]);
    }

?>