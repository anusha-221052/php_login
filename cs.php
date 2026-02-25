<?php
/*$x=16;
if($x>15){
    echo "condition is true";
}
//if-else
if($x<18){
    echo "<br>not eligible for vote";
}
else{
    echo"<br> eligible for vote";
}
//if-elseif-else
$a=5;
$b=10;
$c=15;
if($a>$b && $a>$c){
    echo "<br>a is biggest number";
}
else if($b>$a && $b>$c){
    echo "<br>b is biggest number";
}
else{
    echo "<br>c is biggest number";
}

//switch
$n="blue";
switch($n){
    case "pink":
        echo "<br>color is pink";
        break;
    case "green":
        echo "<br>color is green";
        break;
    case "blue":
        echo "<br>color is blue";
        break;
    default:
        echo "no color matched";
}
//for loop
for($x=0;$x<7;$x++){
    if($x==4){
        continue;
    }
    echo "<br>forloop value:$x ";
}

//while loop
$x=0;
while($x<7){
    if($x==5){
        break;
    }
    echo"<br>whileloop value:$x";
    $x++;
}

//do-while
$x=0;
do{
    echo"<br>dowhile value:$x";
    $x++;
}while($x<5);

//foreach
$color = array('pink','blue','gray','black') ;

foreach($color as $x){
    echo "<br>foreach color:$x";
}*/

//nested loop
/*for($x=1;$x<4;$x++){
    for($y=1;$y<=10;$y++){
        echo "<br>",$x."x".$y."=".($x*$y);
    }
    echo"<br>";
}
echo"<hr><hr>";
for($i=1;$i<=5;$i++){
    for($j=$i;$j>0;$j--){
        echo "* ";
    }
    echo"<br>";
}*/

//ARRAYS
/*--INDEXED ARRAY=ARRAYS WITH NUMERIC INDEX
--ASSOCIATIVE ARRAY=ARRAYS WITH NAMED KEYS
--MULTIDIMENSIONAL ARRAYS=ARRAYS CONTAINED ONE MORE ARRAYS*/ 

/*echo"INDEXED ARRAY";
$car=array("bmw","benz","suziki");
foreach($car as $c){
    echo "<br> $c";
}
echo"<hr><hr>";
echo "ASSOCIATIVE ARRAY";
$car=array("brand"=>"BMW","model"=>"mustang","year"=>1967);
foreach($car as $c){
    echo"<br> $c";
}
//change array value
$car["year"]=2009;
echo"<br>",$car["year"];
echo"<hr><hr>";

echo "<br>MULTIDIMENSIONAL ARRAYS";
$mob=array(
    array("iphone",50,40),//0
    array("vivo",80,70),//1
    array("oppo",40,25));//2
echo "<br>",$mob[0][0].",in stock:".$mob[0][1].",sold:".$mob[0][2];
echo "<br>",$mob[1][0].",in stock:".$mob[1][1].",sold:".$mob[1][2];
echo "<br>",$mob[2][0].",in stock:".$mob[2][1].",sold:".$mob[2][2];
*/

//functons
/*function hi(){
    echo"hello";
}
hi();
function mes($x,$y){
    echo "<br>",$x+$y;
}
mes(2,3);
mes(10,20);
echo"<br>";
function mul($i,$j){
    $res=$i*$j;
    return $res;

}
echo "20*30=".mul(20,30)."<br>";
echo "50*80=".mul(50,80)."<br>";

$user=[
    "username"=>$_POST['username'],
    "email"=>$_POST['email']
];
echo json_encode($user);*/


//STRING FUNCTIONS
/*$y="hello";
$x="this is anusha ";
echo"length ",strlen($x);
echo"<br>upper ",strtoupper($x);
echo"<br>lower ",strtolower($x);
echo"<br>word count ",str_word_count($x);
echo"<br>reverse ",strrev($x);
echo"<br>replace ",str_replace("anusha","akki",$x);
echo"<br>trim ",trim($x);
echo"<br>position ",strpos($x,"anusha");
echo"<br>substr ",substr($x,6,5);
ECHO"<br>concatenation ",$y." ".$x;
$a="hello,hi,how,are,you";
$w=explode(",",$a);   //convert string to array
echo"<br> explode ";
print_r($w);
$b=array("hello","hi","how");
echo"<br>implode ",implode(" ",$b); //convert array to string
*/

//class and object
/*class person{
    public $name;
    public $age;
    //method
    function setname($name){
        $this->name=$name;
    }
    function getname(){
        return $this->name;
    }
    function setage($age){
        $this->age=$age;
    }
    function getage(){
        return $this->age;
    }
}
//object
$per=new person();
$per->setname("anusha");
$per->setage(19);
echo "name =".$per->getname()."<br>";
echo "age =".$per->getage()."<br>";
*/

//creating  a constructor using __construct() fn
/*class myclass{
    public $name;
public function __construct($name){
    $this->name=$name;
    echo "<br> this is constructor:hello",$this->name;
}
}
$obj=new myclass("anu");*/

/*creating a constructor using class name but it is not work this php version
class old{
    public $name;
    public function old($name){
        $this->name=$name;
        echo"<br>constructor:hello",$this->name;
    }
}
$obj1=new old("anu");*/

/*class my{
    public $name;
    public $age;
    //construct
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
        echo"<br>constructor:name=$this->name and age=$this->age";
    }
    //destruct
    public function __destruct(){
        echo"<br>distruct:name=$this->name and age=$this->age is being distruct";

    }
}
$obj=new my("akki",20);
//$obj1=new my("venki",17);
echo"<br>doing some operation......";*/


//include,include_once,require and require_once
/*for($x=0;$x<5;$x++){
    //echo "<br>",include("./index.html");
    //echo include_once("./index.html");
    //echo require("./index.html");
    echo require_once("./index.html");

}*/

//get request
//if($_GET){
echo "username is ",$_GET["username"];
echo "<br>useremail is ",$_GET["email"];
//}

//POST REQUEST
//echo "signup page";
//print_r($_POST);
/*if($_POST){
    echo "username= ",$_POST["username"];
    echo "<br>useremail= ",$_POST["email"];
    echo "<br>userpassword=",$_POST["userpassword"];


}*/


//REQUEST
/*foreach($_REQUEST as $key=>$data){
    echo"<br>$key is $data";
}*/


//FILES UPLOAD
/*if(isset($_FILES['fileupload'])){
    $path=$_FILES['fileupload']['name'];
    $upload_path="./uploads/".$path;
    if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_path)){
        echo "file upload successfully";
    }
    else{
        die("failed to upload");
    } 
    
}
else{
    die("file not found");
}*/


//COOKIE
//syntax setcookie(name,value,expire,path,domain,httponly)
/*setcookie("fruit","apple",time()+(86400));
setcookie("color","blue",time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "current fruit is ",$_COOKIE['fruit'];

}else{
    echo"no cookie set";
}
echo"<br>";
if(isset($_COOKIE['color'])){
    echo "current color is ",$_COOKIE['color'];

}else{
    echo"no cookie set";
}
echo "<br>";
print_r($_COOKIE);*/



//SESSION

?>