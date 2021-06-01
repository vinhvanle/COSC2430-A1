<?php 
if (isset($_GET['pagenumber'])) {
    $pagenum = $_GET['pagenumber'];
} else{
    $pagenum = 1;
}
$record_page = 10;
$offset = ($pagenum-1)*$record_page;
$total_pages = 10;
?>
<ul class="pagination">
    <li><a href="index.php">First</a></li>
    <li class="<?php if($pagenum <=1){ echo "disable";}?>">"
        <a href="<?php if($pagenum<=1){ echo'#';} else {echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>