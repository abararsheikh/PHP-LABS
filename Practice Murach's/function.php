<?php
/**
 * Created by PhpStorm.
 * User: abrar
 * Date: 2/16/2016
 * Time: 7:01 AM
 */

/*
 * Pass by refernce and by value
function add3(&$value)
{
    $value+=5;
    echo "number : $value <br/>";
}
$number = 5;
add3($number);
echo "number is : $number";
*/

/*
function array_analyze($array,&$sum,&$prod,&$avg)
{
    $sum = array_sum($array);
    $prod = array_product($array);
    $avg = $sum/count($array);
}
$list=array(1,4,9,16);
array_analyze($list,$s,$p,$a);
echo  '<p>sum '.$s .'<br/>
    product :'.$p.'<br/>Average'.$a.'</p>';

*/

function display_array($error,$tag ='p',$class='error')
{
    $opentag = '<'. $tag .'class="'.$class.'">';
    $closstag ='</'.$tag.'>';
    echo $opentag .$error . $closstag;
}
echo display_array('out of range','li');