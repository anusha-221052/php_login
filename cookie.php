<!DOCUTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post">
            <input type="text" name="user" placeholder="enter user name">
            <br><br>
            <button name="button" value="set">set cookie</button>
            <br><br>
            <button name="button" value="display">display cookie</button>
            <br><br>
            <button name="button" value="delete">delete cookie</button>


        </form>
    </body>
</html>

<?php
if(isset($_POST['button'])){
    if($_POST['button']=='set'){
        $val=$_POST['user'];
        //echo $val;
        setcookie("user",$val,time()+(86400));
        echo"<br> cookie is set";
    }
    if($_POST['button']=='display'){
       if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
       }
    }
    if($_POST['button']=='delete'){
       if(isset($_COOKIE['user'])){
        setcookie("user",null,-1);
       }
    }
}
?>