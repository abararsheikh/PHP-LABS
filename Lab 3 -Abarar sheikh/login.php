<?php

$email ="";
$phone ="";
$error ="";
$firstname = "";
$lastname="";
$radiobtn="";
$radiobtnValue ="";
$gender="";


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
        if(preg_match("/^[_.0-9a-z-a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$/",$email))
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
 * Validate Radio
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
        $error.="<p style ='color:red'>Please select gender</p>";
    }
return $error;
}


/**
 * Validate Dropdownlist
 */

function valdDrop($drop)
{
    $error="";

   if("select department"==$_POST['department'])
    {
        $error.="<p style ='color:red'>Please select Departtment</p>";
    }

    return $error;
}

/**
 * Validate Message Box
 */

function valMessage($msgBox)
{
    $error="";
    if(trim($_POST['user_msg'])=="")
    {

        $error.="<p style ='color:red'>Please enter message</p>";
    }

    return $error;
}

if(isset($_POST['submit']))
{

        $firstname = $_POST['user_fname'];
        $lastname = $_POST['user_lname'];
        $email = $_POST['user_email'];
        if (isset($_POST['gender'])) {
            $radiobtnValue = $_POST['gender'];
        }

        $error .= validFname($firstname);
        $error .= validLastname($lastname);
        $error .= validEmail($email);
        $error .= validRadio($radiobtnValue);
        $error .= valdDrop($dropdownList);
        $error .= valMessage($msgBox);


}


$radio = ['Male','Female'];

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
                <?php
                $radioDisplay="";
                foreach($radio as $radiobtn)
                {
                    if($radiobtnValue ==$radiobtn)
                        $radioDisplay.='<input type ="radio" name = "gender" id ="gender" value="'.$radiobtn.'" checked/>'.$radiobtn;
                    else
                        $radioDisplay.='<input type ="radio" name = "gender" id ="gender" value="'.$radiobtn.'"/>'.$radiobtn;
                }
                echo $radioDisplay;


                ?>

            </div>
            <div>
                <label for="dropdown" name ="dropdown" style ="color:#895fa9;font-size:20px;">Select your department :    </label>
               <select name ="department" id ="department">

                   <?php

                       $dlist = ['select department', 'computer science', 'Electrical', 'Electronics'];
                       foreach ($dlist as $subject) {
                           if ($dropdownList == $subject) {
                               echo "<option value ='" . $subject . "'selected=\"selected\">" . $subject . "</option>";
                           } else {
                               echo "<option value ='" . $subject . "'>" . $subject . "</option>";
                           }
                       }

                   ?>

               </select>
            </div>

            <div>
                <label  for ="message" style ="color:#895fa9;font-size:20px;">Your message:</label>
            </div>
            <div>
		  <textarea id ="message" name ="user_msg">
              <?php
              if(isset($_POST['user_msg']))
              {
                echo htmlentities($_POST['user_msg']);
              }

              ?>
				</textarea>

            </div>
            <div class="submit">
                <button type ="submit" name="submit" id="submitbutton">
                    Submit
                </button>

            </div>
        </form>

    </div> <!-- end of page-wrapper-->

</section>


<?php
include_once 'footer.php';
?>


</body>

</html>
