<!DOCUTYPE html>
<html>
    <head>
        <title>button-click</title>
</head>
<body>
    <form method="post">
        <button name="button">call function</button>
</form>
</body>
</html>

<?php
if(isset($_POST["button"])){
    btn_call();
}
function btn_call(){
    echo "function called on button click";
}
?>