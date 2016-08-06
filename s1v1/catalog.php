<?php


include 'inc/data.php';
include 'inc/functions.php';
include 'inc/data.php';
$pageTitle = "Full catalog";

// class is on of css for nav
//check the URL ? cat
$section = null;

if(isset($_GET["cat"]))
{
    if($_GET["cat"]=="books")
    {
        $pageTitle = "Books";
        $section = "books";
    }
    else if($_GET["cat"]=="movies")
    {
        $pageTitle = "Movies";
        $section = "movies";
    }
    else if($_GET["cat"]=="music")
    {
        $pageTitle = "Music";
        $section = "music";

    }
}

include("inc/header.php");?>

<div class="section catalog page">
    <div class = "wrapper">

        <h1><?php echo $pageTitle; ?></h1>
        <ul class = "items">
            <?php
//            foreach($catalog as $id=>$item)
//            {
//                echo get_item_html($id,$item);  //Print return value here
//            }

            $categories = array_category($catalog,$section);
            foreach($categories as $id)
            {
                echo get_item_html($id,$catalog[$id]);  //Print return value here
            }
            ?>

        </ul>
    </div>

</div>

<?php include("inc/footer.php") ; ?>