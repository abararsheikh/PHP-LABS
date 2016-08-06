<?php
session_start();


$user = 'nithya';
$pass = "1234";


echo "Login Page <br />";




if($user == "nithya" && $pass=='1234')
{
    $_SESSION['username'] = "nithya1";
    echo "valid login";
}
else {
   echo "no valid login"; 
    
}
  echo "<br /><br />"  
    


?>
<a href="login.php"> Login</a> |
<a href="logout.php"> Logout</a> |
<a href="securepage.php"> Secure Page</a> |
<a href="main.php"> Main</a> |