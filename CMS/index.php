<?php
require_once('database.db');
//var_dump($db);
//die();

//create a new connection to database
$results = $db->query('SELECT * FROM moviefeature');
var_dump($results);
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2>Films by Title</h2>

  <ol>
      <li><i class="lens"></i>Film One</li>
      <li><i class="lens"></i>Film Two</li>
      <li><i class="lens"></i>Film Three</li>
      <li><i class="lens"></i>Film Four</li>
  </ol>

</body>

</html>