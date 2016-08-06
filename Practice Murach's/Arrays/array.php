<?php
$student = array('name','student num','gender','a','b');
//unset($student[3]);
//array_values($student);
// $student[3] ="a";
echo "$student[3] <br/>";


$student2 = array();
 $student2[1] ="abrar";
$student2[2]=23;
echo $student2[1];

 /*
 * foreach($student as list)
{
echo "<li>" list "</li>";
}

 Dispaly al the values of array using for loop

$numbers = array();
for($i=0;$i<10;$i++)
{
 $numbers[] = $i;
 echo "<br/>$numbers[$i]<br/>";
}
 */
/*here i am printing directly array and below i am storing array in varibal in then printing so need to append for that*/
/* generate 10 random numbers */
$numbers = array();

for($i=0;$i<10;$i++)
{
 $numbers[] = mt_rand(1,100);

}

$storvalue ="";
for($i=0;$i<count($numbers);$i++)
{
 $storvalue .= "<br/>$numbers[$i] <br/>";
}

echo $storvalue;

echo "<br/>";
/* syntax for create an associative array */
$name = array('myname'=>'abrar','age'=>'23','country'=>'india');
print_r($name);
echo "<br/>";
echo "firstname : {$name['myname']}";
echo "age : {$name["age"]}";
echo "<br/>";
//echo "<ul>";
foreach($name as $list=>$dis)
{
    echo "<li>$list :$dis </li>";
}
echo"<h1>Merge two array</h1></br>";
$student1 = array('abrar','23','india');
$student2 = array('navaz','22','canada');
$student = array_merge($student1,$student2);
print_r($student);

echo "<h1>Functions with array</h1><br/>";
$num = range(1,10,2);
foreach($num as $numbers)
{
    echo "<li>$numbers </li>";
}
echo "<br/>";
$fill = array_fill(0,5,4);
foreach ($fill as $item)
{
    echo"<li>$item</li>";
}
echo "<br/>";
$padding = array_pad($fill,10,2);
foreach ($padding as $item)
{
    echo"<li>$item</li>";
}

echo "<h1>Arrays with push and pop</h1><br/>";

$fullname = array('abrar','sheikh');

array_unshift($fullname,'abrar');
foreach($fullname as $Name)
{
    echo "<li>$Name</li>";

}
echo "<h1>Search array</h1><br/>";
  $searchnumber =array(10,11,12,13,14,15);
$answer= in_array('10',$searchnumber);
echo "$answer <br/>";

$names = array('Mike','Mike','Anne','Joel','Joel');
$nam= array_rand($names,2);
foreach($nam as $name)
{
    echo $name.="<br/>";
}

// function example
function coin_toss()
{
    $coin = (mt_rand(0,1) ==0) ? 'head' : 'tails';
    return $coin;
}
echo coin_toss();