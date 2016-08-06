<?php
session_start();
     
unset($_SESSION['username']);

$_SESSION = array();
session_destroy();

echo "logout page<br /><br />";
?>
<a href="login.php"> Login</a> |
<a href="logout.php"> Logout</a> |
<a href="securepage.php"> Secure Page</a> |
<a href="main.php"> Main</a> |