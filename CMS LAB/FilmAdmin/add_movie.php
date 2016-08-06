<?php
//connect to database
require_once('database.php');

require_once 'file_util.php';  // the get_file_list function
require_once 'image_util.php'; // the process_image function

// Get the value from the form
$film_id = $_POST['film_id'];
$title = $_POST['title'];
$releaseDate = $_POST['releaseDate'];
$director = $_POST['director'];
$cast = $_POST['cast'];
//$img = $_POST['img'];

// Image
$file_get = $_FILES['img1']['name'];
$temp = $_FILES['img1']['tmp_name'];

//==============================================================
//size of the uploaded file in bytes
$file_size = $_FILES['img1']['size'];
//error number
$file_error = $_FILES['img1']['error'];
//type of the file(if browser provides)
$file_type = $_FILES['img1']['type'];
if ($file_error > 0)
{
    echo "Problem";
    switch ($file_error)
    {
        case 1:
            echo "File exceeded upload_max_filesize.";
            break;
        case 2:
            echo "File exceeded max_file_size";
            break;
        case 3:
            echo "File only partially uploaded.";
            break;
        case 4:
            echo "No file uploaded.";
            break;
    }
    exit;
}

$image_dir = '../Assets/image/HomePage/';
$image_dir_path = getcwd() . DIRECTORY_SEPARATOR . $image_dir;



      //  if (isset($_FILES['img1']))
      //  {
            //$filename = $_FILES['img1']['name'];
            $file_get = $_FILES['img1']['name'];
            // create the '400' and '100' versions of the image
            process_image($image_dir_path, $file_get);

            //$source = $_FILES['img1']['tmp_name'];
            $temp = $_FILES['img1']['tmp_name'];
            $file_to_saved = $image_dir_path . DIRECTORY_SEPARATOR . $file_get;
            move_uploaded_file($temp, $file_to_saved);


       // }



//====================================================================
//$file_to_saved = "../Assets/image/HomePage/".$file_get;

//Documents folder, should exist in your host in there you're going to save the file just uploaded

//move_uploaded_file($temp, $file_to_saved);

//echo $file_to_saved;



 // Image part ends here

// Validate inputs
if (empty($title) || empty($releaseDate) || empty($cast) || empty($director) ) {
    $error = "Invalid Movie data. Check all fields and try again.";
    echo $error;
} else {
    // If valid, Add the movie to the database

    $query = "INSERT INTO moviefeature (title ,releaseDate,director,cast,img) VALUES ('$title','$releaseDate','$director','$cast','$file_to_saved')";
    $db->exec($query);

    // Display the Movie List page
    header('location: movieindex.php');
}