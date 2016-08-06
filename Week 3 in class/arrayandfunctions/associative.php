<?php
$student = ['name' => 'Marie Rishea', 'email' => 'marie@humber.ca', 'program' => 'web development'];


echo($student['name']);

foreach($student as $key => $value){
    echo "<li>" . $key . " : " . $value;
}