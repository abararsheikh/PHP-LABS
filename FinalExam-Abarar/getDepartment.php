<?php
require_once 'database.php';
$db = Database::getDB();
$interest_rate = filter_input(INPUT_POST, 'department2',
    FILTER_VALIDATE_FLOAT);
var_dump($interest_rate);
echo $interest_rate;



//  $id = $departments['department_id'];
$sql = "SELECT * FROM staffdirectory where department = '$id'";

$result = $db->query($sql);

$fullName = $result->fetchAll();


?>
<?php foreach ($fullName as $Name) : ?>

    <a href =""><?php echo $Name['fname'].','.$Name['lname'];?></a>
<?php endforeach  ?>