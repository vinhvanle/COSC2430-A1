<?php
function readCSV($path) {
        if (!file_exists($path)){
            return false;
        }
        $file = fopen($path, 'r');
        $first = fgetcsv($file);
        $items = [];
        while ($row = fgetcsv($file)) {
          $i = 0;
          $item = [];
          foreach ($first as $col_name) {
            $item[$col_name] =  $row[$i];
            $i++;
          }
          $items[] = $item;
        }
        return $items;
    }
?>
