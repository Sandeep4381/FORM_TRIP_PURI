<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <div class="container">
        this is my first php website
   <?php

   define('PI' ,3.14);
    echo "hello word  this is printed using php";
    //single line comment
    /*
    this 
     is 
     multilinecomment
    */
    //Lorem, ipsum dolor.
    $variable1= 10;
    $variable2=2;
    echo $variable1;
    echo $variable2;
echo $variable1+$variable2;

// operator in php
// Arithmetic operator
echo"<br>";
echo "the value of  varible1 + varible2 is";
echo"<br>";
echo $variable1+$variable2;

echo"<br>";
echo "the value of  varible1 - varible2 is";
echo"<br>";
echo $variable1-$variable2;

echo"<br>";
echo "the value of  varible1 / varible2 is";
echo"<br>";
echo $variable1/$variable2;

// Assignment operator

$newVar=$variable1;
//$newVar -=1;
// $newVar /=1;
$newVar *=2;

echo "the value of new varible is ";
echo $newVar;
// Comparison operator
 // echo "<h1> Comparison Operators</h1>";
 echo"<br>";
echo "The value of 1==4 is";
echo var_dump(1==4);
echo"<br>";
echo "The value of 1!=4 is";
echo var_dump(1!=4);
echo"<br>";
echo "The value of 1<=4 is";
echo var_dump(1<=4);
echo"<br>";
// dcerement/dcerement operator
//echo $variable1++;
echo ++$variable1;
echo"<br>";

echo $variable1;
// Logical Operators
// and (&&)
// or (||)
// xor
// |
 //$myVar = (true and true);
 //$myVar =(true and false);

 $myVar=(false xor false);
echo  "<br>";
 echo var_dump($myVar);


    ?>
<?php 
/// data type in php

//  1.String
//  2.integer
//  3.float
//  4.Boolean
//  5.Array 
//  6. Object 
echo " <br> Data Type   <br>";
$var ="This is a string";
echo var_dump($var);

echo " <br> Data Type   <br>";
$var =88;
echo var_dump($var);

echo " <br> Data Type   <br>";
$var =true;
echo var_dump($var);
echo"<br>";
echo PI;


?>





    </div>
</body>
</html>