<!DOCUTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post">
            <input type="text" name="user" placeholder="enter user name">
            <br><br>
            <button name="button" value="set">set session</button>
            <br><br>
            <button name="button" value="display">display session</button>
            <br><br>
            <button name="button" value="delete">delete session</button>


        </form>
    </body>
</html>

<?php
session_start();
;if(isset($_post['button'])){
    if($_POST['button']=='set'){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }
    if($_POST['button']=='display'){
       echo $_SESSION['user'];
    }
    if($_POST['button']=='delete'){
        session_destroy();
    }
}