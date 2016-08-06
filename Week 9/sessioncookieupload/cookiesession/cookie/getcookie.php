<?php
if(isset($_COOKIE['language'])){
echo "My language choice " . $_COOKIE['language'];
}
 else {
   echo "no cookie found" ;
}


