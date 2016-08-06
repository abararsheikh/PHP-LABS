<?php
//phpinfo();
//getenv();
//echo "Hello";
$first = array("one","two");
$second = array("three","four","five");
$sum = $first + $second;
print_r($sum);


$a = "10";
$b="20";
${$b};

$test=array('a','b');
foreach($test as $d)
{
    //$c++;
    echo $d."<br>";

}

$button = '<button id="submitorder" class="btn btn-lg btn-block btn-info" title="newtest">Submit Order</button><br />';
echo $button;

$test_array[] = array("id"=>1,"name"=>"abrar","alstname"=>"sheikh");

foreach($test_array as $test)
{
    echo $test["name"]."<br>";
}
//print_r($test_array);


?>
