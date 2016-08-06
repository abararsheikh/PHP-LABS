<?php
session_start();
if(isset($_SESSION['username'])){
echo "welcome to secure page";
}
else {
    
    echo "access denied";
}

echo "<br /><br />"
?>
<a href="login.php"> Login</a> |
<a href="logout.php"> Logout</a> |
<a href="securepage.php"> Secure Page</a> |
<a href="main.php"> Main</a> |