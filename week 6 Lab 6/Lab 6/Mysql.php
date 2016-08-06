<?php
$usrname ="root";
$password = "";
$dsn = "mysql:host = localhost;dbname = test1";
try{

    $db = new PDO($dsn,$user,$pass);
    echo "connect";

    $sql ="SELECT * FROM person";
    $result = $db ->exec($sql);


}
catch
{

}