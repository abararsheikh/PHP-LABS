<?php
/**
 * Created by PhpStorm.
 * User: abrar
 * Date: 1/27/2016
 * Time: 8:05 PM
 */

echo "Your form has been submited";
var_dump($_POST);
if(isset($_POST['submit']))
{
   $first_name =  $_POST['first_name'];
    $last_name =  $_POST['password'];


}


?>

