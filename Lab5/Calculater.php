<?php

/**
 * Created by PhpStorm.
 * User: abrar
 * Date: 2/25/2016
 * Time: 10:32 AM
 */
class Calculater
{
    private $value1;
    private  $value2;

    public function __construct($n1,$n2)
    {
        $this->value1 = $n1;
        $this->value2 = $n2;
    }
    public function getValue1()
    {
        return "value 1=$this->value1" ;
        // get the value 10 and something like this
        // and you can define set method in that method you are passing 10 value and you can change
        //that value to some other value and also you can do validation or validate that value and then pass to
        // out side to echo.

    }

    public function getValue2()
    {
        return $this->value2;

    }
    public function add()
    {
        return $this->value1 + $this->value2;
    }
    public function subtract()
    {
        return $this->value1 - $this->value2;
    }
}

$p = new Calculater(10,20);
$result = $p->add();
$result = $p->getValue1();
echo $result;