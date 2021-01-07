<!DOCTYPE html>
<html>
<body>

<?php


//$color = "red";
/*echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
*/
//variaveis
/*$x = 5  + 5;
$txt = "Hello world \n";
$y = 10.5*10.8;
echo $txt;
echo $y;
echo $x;
*/
// print e concatenar

/*$x = 5;
$y = 4;
echo $x + $y;
*/
 

function myTest() {
    $x = 5; //globalescop
    // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>