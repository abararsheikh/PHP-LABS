<?php


function displayWelcome($name,$email = null){

    return "Welcome $name. We will contact through $email";
}

//$result = displayWelcome("Helen", "helen@humber.ca");
//echo $result;

//$result2 = displayWelcome("Helen");
//echo "<br />" . $result2;


$a = "45";
function add(&$num1,&$num2){


    global $a;
    echo "Inside a " . $a;
    $a = 56;
    $num1 = $num1 + 2;
    return $num1 + $num2;
}

$n1 = 5;
$n2 = 6;

add($n1,$n2);
echo "outside" . $a;
/*
echo $n1;
echo add($n1,$n2) . "<br />";
echo $n1;
echo add($n1,$n2) . "<br />";
echo $n1;
*/

