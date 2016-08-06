<?php


public class Validateform
{
    private $error="";
    public function getError()
    {
        return $this->error;
    }
    public function __construct()
    {

    }

    /**
     * Validate Firstname
     */
    function validFname($name)
    {
        $error ="";
        if(empty($name))
        {
            $error.="<p style ='color:red;'>Please enter firstname</p>";
        }
        else{
            // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z]*$/",$name))
            {
                $error.="<p style = 'color:red'>Only letters and white spaces allowed for firstname</p>";
            }
        }
        return $error;
    }


    /**
     * Validate Lastname
     */

    function validLastname($name2)
    {
        $error ="";
        if(empty($name2))
        {
            $error.="<p style ='color:red;'>Please enter lastname</p>";
        }
        else
        {
            // check if name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z]*$/",$name2))
            {
                $error.="<p style = 'color:red'>Only letters and white spaces allowed for lastname</p>";
            }
        }
        return $error;
    }

    /**
     * Validate Email
     */
    function validEmail($email)
    {
        $error ="";
        if(empty($email))
        {
            $error .= "<p style='color:red;'>please enter email </p>";
        }
        else
        {
            if(filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $error .= "<p style='color:#7dba1a'>Valid email </p><br />";
            }
            else
            {
                $error .= "Invalid email <br />";
            }
        }
        return $error;
    }

    /**
     * Radio button
     */
    function validRadio($radiobtnValue)
    {
        $error="";


        if(isset($_POST['gender']))
        {
            $radiobtnValue= $_POST['gender'];


        }
        else
        {
            $gender="";
            $error.="<p style ='color:red'>Please select your product</p>";
        }
        return $error;
    }
    /**
     * postal code
     */

    function validPostalcode($pcodeparam)
    {
        $error ="";
        if(empty($pcodeparam))
        {
            $error .= "<p style='color:red;'>please enter postal code </p>";
        }
        else
        {
            if(preg_match("/^([ABCEGHJKLMNPRSTVXY][0-9][A-Z] [0-9][A-Z][0-9])*$/",$pcodeparam))
            {
                $error .= "<p style='color:#7dba1a'>Valid postal code </p><br />";
            }
            else
            {
                $error .= "<p style='color:red;'>Invalid postal code</p> <br />";
            }
        }
        return $error;
    }

    function validPhonenumber($phonenum)
    {
        $error ="";
        if(empty($phonenum))
        {
            $error .= "<p style='color:red;'>please enter phone number </p>";
        }
        else
        {
            if(preg_match('/1?\W*([2-9][0-8][0-9])\W*([2-9][0-9]{2})\W*([0-9]{4})(\se?x?t?(\d*))?/',$phonenum))
            {
                $error .= "<p style='color:#7dba1a'>Valid phone number </p><br />";
            }
            else
            {
                $error .= "<p style='color:red;'>Invalid phone number </p><br />";
            }
        }
        return $error;
    }
}


