<?php
require_once 'validate.php';
$email="";
$postal="";
$firstname="";
$lastname="";
$product_selected="";
$phone="";
function display_radios($products)
{
    foreach($products as $product)
    {
        echo "<br/>" . "<input type=\"radio\" name=\"insurance\" value=\"$product\">" . $product;

    }
    echo "<br/><br/>";
}
if(isset($_POST['btnSubmit']))
{
    $email = (isset($_POST['email'])?$_POST['email']:"");
    $postal = (isset($_POST['postal'])?$_POST['postal']:"");
    $firstname =(isset($_POST['firstname'])?$_POST['firstname']:"");
    $lastname =(isset($_POST['lastname'])?$_POST['lastname']:"");
    $phone =(isset($_POST['phone'])?$_POST['phone']:"");
    $validate = new  validate();
    $validate->firstnameValidate($firstname);
    $validate->lastnameValidate($lastname);
    $validate->valid_postal($postal);
    $validate->phoneValidate($phone);
    $validate->valid_email($email);
    $validate->radioValidate("insurance");
    $error = $validate->getError();
    if($error === "")
    {
        echo "<p style='color:green;'>Thank you $firstname, for requesting on our product.<br/>We will send an email to $email with the detailed product information</p>";

    }
    else
    {
        echo "<p style='color:red;'>".$error."</p>";
    }
}



?>

<div class = "form"><br/>
    <form action="" method="post">
        First name:<input type="text" name="firstname" value="<?php echo $firstname?>"/><br/><br/>
        Last name:<input type="text" name="lastname" value="<?php echo $lastname?>"/><br/><br/>
        Postal Code:<input type="text" name="postal" value="<?php echo $postal?>"/><br/><br/>
        Phone nomber:<input type="text" name="phone" value="<?php echo $phone ?>"/><br/><br/>
        Email:<input type="text" name="email" value="<?php echo $email?>"/><br/><br/>
        Please send the information on the following product:
        <?php
        $product = ['Life Insurance','Auto Insurance','Health Insurance','Travel Insurance'];
        display_radios($product);
        ?>
        <input type="submit" value="submit" name="btnSubmit"/><br/>

    </form>
</div>
