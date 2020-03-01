<!doctype html>
<html lang="en">
  <head>

    <title>The Calculator!</title>
  </head>
  <body>
  <?php
require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); 
echo ", ";
echo $Calculator->calc("*", 10, 2); 
echo ",  ";
echo $Calculator->calc("/", 10, 2);
echo ",  ";
echo $Calculator->calc("-", 10, 2);
echo ",  ";
echo $Calculator->calc("+", 10, 2); 
echo ",  ";
echo $Calculator->calc("*", 10); 
echo ",  ";
echo $Calculator->calc(10); 
?>
 
 

    
  </body