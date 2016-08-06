<?php


class Animals
{
    private $name;
   public $gender;
    private $color;

    const MALE ="m";
    const FEMALE ="f";

    public function setGender($value)
    {
        if($value == self::FEMALE || $value ==self::MALE){
            $this ->gender = $value;
        }
    }

    public function setName($value)
    {
        $this->name = $value;
    }
    public function setColor($value)
    {
        $this->color = $value;
    }
    /*
    public function __construct($name,$gender,$color)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }
*/
    public function displayDetails()
    {
        echo $this->name ." : " .$this->gender . " : " . $this->color;
    }

}
