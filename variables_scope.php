<?php
echo "DATATYPES";
echo "<br>";
$a="anu";
$b=1;
$c=2.3;
$d=TRUE;
$games[3]=array("hi","hello","hi");
echo var_dump($a);
echo"<br>";
echo var_dump($b);
echo"<br>";
echo var_dump($c);
echo"<br>";
echo var_dump($d);
echo"<br>";
echo var_dump($games);
echo "<br>";
echo "VARIABLE SCOPE";
echo "<br>"
$y=50;
function oye(){
    global $y;
    static $z=90;
    //local
    $x="anu";
    echo "local variable = $x";
    echo "<br>";
    echo "global variable = $y";
    echo "<br>";
    echo "static variable =$z";
}
oye();
echo "<br>";
echo "global variable $y";
?>