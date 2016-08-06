
<!--
<div>

    <form action = "process.php" method = "post">
       Username: <input type = "text" name="username" /><br/>
       Password: <input type = "text" name="password"/><br/>
        <input type = "submit" id = "btnlogin" />

    </form>



</div>
-->


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

        <form action="process.php" method="post">

            <div>
                <label  for ="fname" style ="color:#895fa9;font-size:20px;">First name:</label>
                <input type ="text" id ="fname" name ="user_fname" placeholder ="Type your first name" />

            </div>
            <div>
                <label  for ="lname" style ="color:#895fa9;font-size:20px;">Last name:</label>
                <input type ="text" id ="lname" name ="user_lname" placeholder ="Type your last name" />

            </div>
            <div>
                <label  for ="email" style ="color:#895fa9;font-size:20px;">Email:</label>
                <input type ="email" id ="email" name ="user_email" placeholder ="john@example.com" />

            </div>
            <div class = "radio">
                <label for ="gender" name ="gender" style ="color:#895fa9;font-size:20px;">Gender:</label>
                <input type ="radio" name = "gender" id ="gender" value ="male">Male
               <input type ="radio" name ="gender" id ="gender"  value = "female"> Female


            </div>
            <div>
                <label for="dropdown" name ="dropdown" style ="color:#895fa9;font-size:20px;">Select your department :    </label>
                <select name ="department" id ="department">
                    <option value ="select">select department</option>
                    <option value ="computer">computer science</option>
                    <option value ="electrical">Electrical</option>
                    <option value = "Electronics">Electronics</option>
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
        <span id = "nameErr"></span>
    </div> <!-- end of page-wrapper-->

</section>


<?php
include_once 'footer.php';
?>


</body>

</html>
