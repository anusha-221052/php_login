<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    /*$sql="INSERT INTO data(username,email,password)
        VALUES ('$username','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "registration successful";
    }
    else{
        echo "Error:". 
        mysqli_error($conn);
    }*/
    //clean input
    $username =trim('username');
    $email = trim('email');
    $password = trim('password');
    $username =strip_tags('username');
    $email = strip_tags('email');
    $password = strip_tags('password'); 
    $username =strtolower('username');
    //validate input and die 
    if (strlen($username)<6){
        die("error:username atleast 5 chars");
    } 
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("error:invalid email format");
    }
    if (strlen($password)<8){
        die("error:password atleast 9 chars");
    }
    $sql="INSERT INTO data(username,email,password)
        VALUES ('$username','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "registration successful";
    }
    else{
        echo "Error:". 
        mysqli_error($conn);
    }
}
    ?>