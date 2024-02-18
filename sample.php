<!DOCTYPE html>
<html>
<body>

<h1>SHIV</h1>

<?php
echo "<h1>for loop used</h1><br>";
for($X=0; $X<10; $X++)
{
echo "Shiva Sam Bho! <br>";
}
echo "<hr>";
echo "<h1>To used If else codition</h1><br>";
$age=28;
if($age>17)
{
    echo "You are voter ";
}else{
    echo "You cannot vote";
}
echo "<hr>";
echo "<h1>To used If elseif codition</h1><br>";
$num=10;
if($num>0)
{
    echo "Positive number";
} elseif($number<0)
{
    echo "negative Number";
}else if($num==0){
    echo"Zero";
}else{
    echo"invalid input";
}
echo "<hr>";
echo "<h1>String reverse</h1>";
echo ("Welcome world!!<br>");
echo strrev("Welcome world!!");
echo "<hr>";
echo "<h1>Find the word position in the string and count the position </h1><br>";
echo strpos("Welcome world!","world");
echo "<hr>";
echo "<h1> using function</h1><br>";
function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg(); // call the function
  echo "<hr>";
  echo "<h1>Used Array</h1><br>";
  echo ". is used to connect  two or more <br>";

$car=array(" bmw"," toyota"," volva");
echo "<br>I like" .$car[0].$car[1].$car[2];
?>
</body>
</html>