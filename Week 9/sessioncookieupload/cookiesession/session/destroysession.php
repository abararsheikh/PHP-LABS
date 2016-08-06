<?php
session_start();

echo isset($_SESSION['username']) ?  $_SESSION['username'] :  "not found";


//destroy username session variable
unset($_SESSION['username']);

//destroy all the session variables in the array
$_SESSION = array();

//detroy session id and the file
session_destroy();
