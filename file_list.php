<?php
$path="uploads";
$items=scandir($path);
//$items=array_diff($items.array(".",".."));
foreach($items as $item){
    echo "<a href=./uploads/$item>$item</a>";
    echo"<br>";
}
?>