<?php
//$dsn = "mysql:host=localhost;dbname=cdcol";
$dsn = "mysql:host=localhost;dbname=test1";
$user ="root";
$pass = "";

try {
    $db = new PDO($dsn, $user, $pass);
    echo "Conection is sucess full <br>";

    $sql = "SELECT * FROM person";

    $result = $db->query($sql);
    //var_dump($result);


    //fetch data using object
    //$p = $result->fetchAll();
    //var_dump($p);

    //echo "Name : " . $p['name'];
//=============================================================
    // Fetch data using array
    $result->setFetchMode(PDO::FETCH_ASSOC);
    foreach($result as $p)
    {
        echo "Name : " . $p['name'] . "<br />";
    }

}
catch(PDOException $e){
    echo "error" . $e->getMessage();
}
