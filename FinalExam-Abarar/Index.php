<?php
require_once 'database.php';
$db = Database::getDB();
$sql = "SELECT DISTINCT department FROM staffdirectory";
$result = $db->query($sql);

$department = $result->fetchAll();

if(isset($_POST['submit']))
{
  echo $_REQUEST['department'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="getDepartment.php">
    Select Department: <select name="department2" >
        <?php foreach($department as $departments) : ?>
            <option value="<?php $departments['department'];?>"> <?php echo $departments['department'];?> </option>

        <?php endforeach ?>
    </select>
    <input type="submit" name = "submit" value="search"/>
</form>

<a href=""><?php if(isset($fullName['fname']));?> </a>
</body>
</html>