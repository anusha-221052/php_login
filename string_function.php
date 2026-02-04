<?php
echo "STRING FUNCTIONS";
echo "<br>";
$x="anusha srikakulam";
echo "<br>string length=",strlen($x);
echo "<br>";
echo "string count=",str_word_count($x);
echo "<br>";
echo "reverse the string=",strrev($x);
echo "<br>";
echo"<br> CASE CONVERSION";
echo "<br>uppercase string=",strtoupper($x);
echo "<br>";
echo "lowercase string=",strtolower($x);
echo "<br>";
echo "starting capital letter=",ucfirst($x);
echo "<br>";
echo "word format=",ucwords($x);
echo "<br>";
echo "find the 's' position=",strpos($x,"s");
echo "<br> replace 'a=@' in a string=",str_replace("a","@",$x);
ECHO "<br><br> SUBSTING & TRIMMING";
echo "<br> sub string=",substr($x,0,3);
echo "<br> remove space=",trim($x);
echo "<br> remove left side space=",ltrim($x);
echo "<br> remove right side space=",rtrim($x);
ECHO "<br><br> STRING COMPARISION";
echo "<br> string comparision=",strcmp("Anusha srikakulam",$x);
echo "<br> stringcasecomparision=",strcasecmp("Anusha srikakulam",$x);
echo "<br><br>SPECIAL CHARS & SECURITY";
$b="<b>prakash</b>";
echo "<br> html speacial chars=",htmlspecialchars($b);
$a="it's a 'php' prog";
echo "<br> add slashes=",addslashes($a);

?>