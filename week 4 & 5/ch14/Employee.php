<?php
require_once 'Person.php';
class Employee extends Person
{
    private $ssn;

    public function __construct($ssn,$name,$age,$gender)
    {
        $this->ssn = $ssn;
        parent::__construct($name,$age,$gender);
    }
    public function displayDetails(){
        echo "this from child " . $this->name;

    }

}


$em= new Employee('222222222','nithya', 23, Person::FEMALE);

$em->setName('aaa');
$em->displayDetails();