<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>

<style>
*{
     margin:0;
    padding:0;
    box-sizing:border-box;

}

    .container{
     max-width: 80%;
     background:rgb(29, 138, 20);
     margin: auto;
     padding:23px
    }


    </style>
<body>
   
<div class="container">
<h1> Let learn about  PHP </h1>
<p>Your party status is hera:</p>
    <?php

    $age= 71;   
    if($age>18){

     

        echo "You can go to party";
    }

    else if ($age ==7){
        echo " you are 7 year old ";
    }
else {
    echo "You can'nt go to party";
}
echo "<br>" ;

// array in php;;;
$language =array (" Java ", " C", "Html","Php");
echo count($language);
echo "<br>";
echo $language[1];

// loop in php;
echo "<br>";
$a=0;
while ($a <= 10) {
    echo "  <br>The value of a is :";
    echo $a;
    $a++;
}

//  Itetrating loop in php arry;

// $a=0;
// while ($a < count($languages)) {
//     echo "  <br>The value of langauges  is :";
//     echo $languages[$a];
//     $a++;
// }
//   do while  ;

$a=0;
 do  {
    echo"  <br>The value o f a  is :";
    echo $a;
    $a++;
}while ($a < 10);

// for loop

for ($a=0; $a < 10; $a++) { 
   echo " <br>The value of a from the for loop  is :";
   echo $a; 
}
foreach($language as $value){
    echo "<br> the value from for each is :";
    echo $value;
}
function print5(){
    echo"<br>five";
}
print5();
function print_number($number){
    echo "<br> your number is";
    echo $number;

}
print_number(45);
print_number(45);
?>
</div>









</body>
</html>