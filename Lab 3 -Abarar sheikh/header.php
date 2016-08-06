
<?php

function display_navigation()
{
    $navArray = ['Home','Work','About','Contact','Project'];
    foreach($navArray as $nav)
    {
            echo $nav."<li>";

    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript" src="Assignment3jQuery.js"></script>
    <meta charset="utf-8" />
    <title> Portfolio</title>
    <link rel = "stylesheet" type ="text/css" href = "Assignment3.css" />

</head>
<body>

<header id = "header">
    <div class = "page-wrapper">
        <div class="menu-toggle" onclick="toggleBySelector('#main-menu')">
            <img src="Images/Menuicon.png" id="menuicon" alt="Picture of menu icon" /></div>

        <nav id = "main-menu" class = "hidden-small">
            <h2 class = "hidden">Main menu</h2>

            <ul>

                <li><a href ="Assignment3.html"> <?php display_navigation() ?></a></li>

            </ul>



        </nav>

        <div class="myName">
            <h1> Abarar Sheikh</h1>
            <h2> web developer</h2>
        </div>


    </div>  <!--end of page wrapper -->
    </body>
</html>

</header>