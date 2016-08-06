<?php
//include 'Persons.php';
require_once 'Person.php';

$pr = new Person('Davis',45);
$br = new Person('bb',24);


$pr->setGender(Person::MALE);
$pr->displayDetails();

//include 'footer.php';