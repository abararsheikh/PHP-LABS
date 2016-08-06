<?php

require_once 'Animals.php';
$pr = new Animals('Tiger','Male','Yellow');
$pr -> displayDetails();
$pr -> displayDetails(Animals::MALE);