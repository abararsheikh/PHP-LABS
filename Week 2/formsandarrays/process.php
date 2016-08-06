
<?php
include_once 'header.php';
include 'nav.php';


if(isset($_POST['btnlogin'])) {
    echo "Thank you for submitting";

    echo "username :" . $_POST['username'] . "<br />";
    echo "password :" . $_POST['password'] . "<br />";


    var_dump($_POST);

}
else{
    echo "please login first";
}
?>

<?php
include 'footer.php';
include 'footer.php';
include_once 'header.php';
?>



