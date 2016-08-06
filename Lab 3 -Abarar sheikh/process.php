<?php
include_once 'header.php';

?>

<?php
ECHO "THANK YOU FOR SUBMITTING"."<br/>";
echo "<br/>";
echo "username :".$_POST['user_fname']."<br/>";
echo "password :".$_POST['user_lname']."<br/>";
echo "<br/>";
echo "Your Email Adress is :".$_POST['user_email']."<br/>";
echo "Your Gender is:".$_POST['gender']."<br/>";
echo "You have selected:  ".$_POST['department']." "."department"."<br/>";
echo "Your message is :" .$_POST['user_msg']."<br/>";
echo "<br/>";
echo "<br/>";
var_dump($_POST);

?>

<?php
include_once 'footer.php';

?>