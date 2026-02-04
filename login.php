<?php
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT *FROM data WHERE email='$email' AND password='$password'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    echo "login successful";
}
else{
    echo "Invalid login";
}
?>