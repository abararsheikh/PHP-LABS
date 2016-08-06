<?php
$name="language";
$value="english";

//$expire = time() + 3600;
$expire =  new DateTime('+1 month');
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($name,$value,$expire->getTimestamp(),"/","localhost",false,true);


?>
<a href="../session/index.php" >Home</a>