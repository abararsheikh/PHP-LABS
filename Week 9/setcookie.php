<?php
$name="India";
$value="abrar";

//$expire = time() + 3600;
$expire =  new DateTime('+1 year');
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($name,$value,$expire->getTimestamp(),"/","localhost",false,true);
//setcookie('Hello','How are you !!!',$expire->getTimestamp());

?>
<a href="../session/index.php" >Home</a>