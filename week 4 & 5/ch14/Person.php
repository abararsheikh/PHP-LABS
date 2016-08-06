<?php

class Person
{

   const MALE = 'm';
   const FEMALE = 'f';
   private $age;
   protected $name;
   private  $gender;


    public function setGender($value){
        if($value == self::FEMALE || $value == self::MALE){
            $this->gender = $value;
        }
    }
    public function setAge($value){
        if($value >= 21){
            $this->age = $value;
        }
    }

    public function getName(){
        return $this->name;
    }
    public function setName($value){
        $this->name = $value;
    }
    public function __construct($name,$age,$value = null)
    {
        $addd = "23";
        $this->name = $name;
        $this->age = $age;
        if($value == self::FEMALE || $value == self::MALE){
            $this->gender = $value;
        }

    }

    public function __destruct()
    {

    }

    public function addData(){

    }
    public function displayDetails(){
        echo $this->name . " : " . $this->gender;
    }
}



