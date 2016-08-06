
<?php

$email ="";
$phone ="";
$error ="";
$firstname = "";
$lastname="";
$gender="";

if(isset($_POST['submit']))
{

    $firstname = $_POST['user_fname'];
    $lastname = $_POST['user_lname'];
    $email = $_POST['user_email'];
    //$gender = $_POST['gender'];
    $dropdownList = $_POST['department'];
    $msgBox = $_POST['user_msg'];

    if(empty($firstname))
    {
        $error.="<p style ='color:red;'>Please enter firstname</p>";
    }
    else
    {


        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$firstname))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for firstname</p>";
        }
    }
    if(empty($lastname))
    {
        $error.="<p style ='color:red;'>Please enter lastname</p>";
    }
    else
    {

        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$lastname))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for lastname</p>";
        }
    }
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
    if(isset($_POST['gender']))
    {
        $gender= $_POST['gender'];

    }
    else
    {
        $error.="<p style ='color:red'>Please select gender</p>";
    }
    if(isset($_REQUEST['department']) && $_REQUEST['department']=='select')
    {
        $error.="<p style='color:red'>Please select Department</p>";
    }



}




?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript" src="Lab2.js"></script>
    <meta charset="utf-8" />
    <title> Portfolio</title>
    <link rel = "stylesheet" type ="text/css" href = "Assignment3.css" />

</head>
<body>

<?php
include_once 'header.php';
?>
<section id = "desktopmain">
    <div class="page-wrapper">

        <h2 id="contact">Contact</h2>
        <?php
        echo $error;
        ?>
        <form action="" method="post">

            <div>
                <label  for ="fname" style ="color:#895fa9;font-size:20px;">First name:</label>
                <input type ="text" id ="fname" name ="user_fname" placeholder ="Type your first name" value ="<?php echo $firstname;?>"/>

            </div>
            <div>
                <label  for ="lname" style ="color:#895fa9;font-size:20px;">Last name:</label>
                <input type ="text" id ="lname" name ="user_lname" placeholder ="Type your last name" value ="<?php echo $lastname;?>"/>

            </div>
            <div>
                <label  for ="email" style ="color:#895fa9;font-size:20px;">Email:</label>
                <input type ="email" id ="email" name ="user_email" placeholder ="john@example.com" value ="<?php echo $email;?>"/>

            </div>
            <div class = "radio">
                <label for ="gender" name ="gender" style ="color:#895fa9;font-size:20px;">Gender:</label>
                <input type ="radio" name = "gender" id ="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value ="male">Male
               <input type ="radio" name ="gender" id ="gender"  <?php if (isset($gender) && $gender=="female") echo "checked";?>   value = "female"> Female


            </div>
            <div>
                <label for="dropdown" name ="dropdown" style ="color:#895fa9;font-size:20px;">Select your department :    </label>
               <select name ="department" id ="department">
                    <option <?php if(isset($_REQUEST['department']) && $_REQUEST['department'] == 'select') echo 'selected'?> value ="select">select department</option>
                    <option <?php if(isset($_REQUEST['department']) && $_REQUEST['department'] == 'computer') echo 'selected'?> value ="computer">computer science</option>
                    <option <?php if(isset($_REQUEST['department']) && $_REQUEST['department'] == 'electrical') echo 'selected'?> value ="electrical">Electrical</option>
                    <option <?php if(isset($_REQUEST['department']) && $_REQUEST['department'] == 'Electronics') echo 'selected'?> value = "Electronics">Electronics</option>
                </select>
            </div>

            <div>
                <label  for ="message" style ="color:#895fa9;font-size:20px;">Your message:</label>
            </div>
            <div>
		  <textarea id ="message" name ="user_msg">
				</textarea>

            </div>
            <div class="submit">
                <button type ="submit" name="submit" id="submitbutton">
                    Submit
                </button>

            </div>
        </form>
        <!--<span id = "nameErr"></span>-->
    </div> <!-- end of page-wrapper-->

</section>


<?php
include_once 'footer.php';
?>


</body>

</html>
