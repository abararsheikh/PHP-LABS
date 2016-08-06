<?php

$email ="";
$phone ="";
$error ="";
$firstname = "";
$lastname="";
$radiobtn="";
$radiobtnValue ="";
$gender="";
$pcode ="";
$pnumber="";
$email="";

/**
 * Validate Firstname
 */
function validFname($name)
{
    $error ="";
    if(empty($name))
    {
        $error.="<p style ='color:red;'>Please enter firstname</p>";
    }
    else{
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$name))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for firstname</p>";
        }
    }
    return $error;
}


/**
 * Validate Lastname
 */

function validLastname($name2)
{
    $error ="";
    if(empty($name2))
    {
        $error.="<p style ='color:red;'>Please enter lastname</p>";
    }
    else
    {
        // check if name only contains letters and whitespace

        if(!preg_match("/^[a-zA-Z]*$/",$name2))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for lastname</p>";
        }
    }
    return $error;
}

/**
 * Validate Email
 */
function validEmail($email)
{
    $error ="";
    if(empty($email))
    {
        $error .= "<p style='color:red;'>please enter email </p>";
    }
    else
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error .= "<p style='color:#7dba1a'>Valid email </p><br />";
        }
        else
        {
            $error .= "Invalid email <br />";
        }
    }
    return $error;
}

/**
 * Radio button
 */
function validRadio($radiobtnValue)
{
    $error="";


    if(isset($_POST['gender']))
    {
        $radiobtnValue= $_POST['gender'];


    }
    else
    {
        $gender="";
        $error.="<p style ='color:red'>Please select your product</p>";
    }
    return $error;
}
/**
 * postal code
 */

function validPostalcode($pcodeparam)
{
    $error ="";
    if(empty($pcodeparam))
    {
        $error .= "<p style='color:red;'>please enter postal code </p>";
    }
    else
    {
        if(preg_match("/^([ABCEGHJKLMNPRSTVXY][0-9][A-Z] [0-9][A-Z][0-9])*$/",$pcodeparam))
        {
            $error .= "<p style='color:#7dba1a'>Valid postal code </p><br />";
        }
        else
        {
            $error .= "<p style='color:red;'>Invalid postal code</p> <br />";
        }
    }
    return $error;
}

function validPhonenumber($phonenum)
{
    $error ="";
    if(empty($phonenum))
    {
        $error .= "<p style='color:red;'>please enter phone number </p>";
    }
    else
    {
        if(preg_match('/1?\W*([2-9][0-8][0-9])\W*([2-9][0-9]{2})\W*([0-9]{4})(\se?x?t?(\d*))?/',$phonenum))
        {
            $error .= "<p style='color:#7dba1a'>Valid phone number </p><br />";
        }
        else
        {
            $error .= "<p style='color:red;'>Invalid phone number </p><br />";
        }
    }
    return $error;
}
$product = ['Life Insurance','Auto Insurance','Health Insurance','Travel Insurance'];


if(isset($_POST['submit']))
{

$firstname = $_POST['user_fname'];
$lastname = $_POST['user_lname'];
$pcode = $_POST['p_code'];
 $pnumber = $_POST['p_number'];
$email = $_POST['user_email'];

if (isset($_POST['gender'])) {
$radiobtnValue = $_POST['gender'];
}


$error .= validFname($firstname);
$error .= validLastname($lastname);

    $error .= validPostalcode($pcode);
    $error .= validPhonenumber($pnumber);
    $error .= validEmail($email);
$error .= validRadio($radiobtnValue);


$error .= "Thank you " .$firstname ." ".$lastname ."," . "for requesting on our " .$radiobtnValue ."Product." .
    "we will send an email to " .$email . "with detail product information.";


}

?>
<html>
<head>
    <title>Midterm</title>
</head>
<body>
<div class="page-wrapper">

    <h2 id="contact">Request for Information Form</h2>

    <form action="" method="post">

        <div>
            <label  for ="fname" style ="color:#895fa9;font-size:20px;">First name</label>
            <input type ="text" id ="fname" name ="user_fname" placeholder ="Type your first name" />

        </div>
        <div>
            <label  for ="lname" style ="color:#895fa9;font-size:20px;">Last name</label>
            <input type ="text" id ="lname" name ="user_lname" placeholder ="Type your last name" "/>

        </div>
        <div>
            <label  for ="p_code" style ="color:#895fa9;font-size:20px;">Postal Code</label>
            <input type ="text" id ="p_code" name ="p_code" placeholder ="Type your postal code"/>

        </div>
        <div>
            <label  for ="pnumber" style ="color:#895fa9;font-size:20px;">Phone number</label>
            <input type ="text" id ="p_number" name ="p_number" placeholder ="Type your phone"/>

        </div>
        <div>
            <label  for ="email" style ="color:#895fa9;font-size:20px;">Email:</label>
            <input type ="email" id ="email" name ="user_email" placeholder ="john@example.com" />

        </div>
        <div class = "radio">
            <label for ="gender" name ="gender" style ="color:#895fa9;font-size:20px;">Please send me information on the following product <br></label>

            <?php
            $radioDisplay="";
            foreach($product as $radiobtn)
            {
                if($radiobtnValue ==$radiobtn)
                    $radioDisplay.='<input type ="radio" name = "gender" id ="gender" value="'.$radiobtn.'" checked/>'.$radiobtn ;
                else
                    $radioDisplay.='<input type ="radio" name = "gender" id ="gender" value="'.$radiobtn.'"/>'.$radiobtn;
            }
            echo $radioDisplay ;


            ?>

        </div>


        <div class="submit">
            <button type ="submit" name="submit" id="submitbutton">
                Submit
            </button>

        </div>
    </form>

    <?php
    echo $error;
    ?>
</div> <!-- end of page-wrapper-->
</body>


</html>