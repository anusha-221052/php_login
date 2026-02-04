<?php
$conn=mysqli_connect("localhost","root","","userdb");
if(!$conn){
    die("database connection failed");
}
echo "database connected successfully";
?>