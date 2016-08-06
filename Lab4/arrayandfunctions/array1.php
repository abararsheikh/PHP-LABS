<?php
$a = array('aa',3,5,7);
$names = ['marie','john','david'];

echo $names[2];

$names[] = 'nithya';
array_push($names, 'karl','kabi');

$names[23] = "rishea";
//var_dump($names);

/*for($i=0; $i < count($names); $i++){
    echo "<li>" . $names[$i] . "</li>";
}
*/
foreach($names  as $key => $name){
    echo "<li>" . $key . ": " . $name . "</li>";
}
