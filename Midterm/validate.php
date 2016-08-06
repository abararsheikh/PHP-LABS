<?php
class validate
{
    private $error="";
    public function getError()
    {
        return $this->error;
    }
    public function valid_email($email,$errorMsg="Not a valid email<br/>")
    {
        if (preg_match( "/^[_.0-9a-z-a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$/",$email)) {
            $this->error.="";
            return true;
        }
        else
        {
            $this->error.=$errorMsg;
            return false;
        }
    }
    public function valid_postal($postal,$errorMsg="Not a valid postal code<br/>")
    {
        if(!preg_match("/^([ABCEGHJKLMNPRSTVXY][0-9][A-Z] [0-9][A-Z][0-9])*$/",$postal))
        {
            $this->error .= $errorMsg;
            return false;
        }
        else
        {
            $this->error.="";
            return true;
        }
    }
    public function radioValidate($value, $errorMsg = "Please select radio button")
    {
        if (!isset($_POST[$value])) {
            $this->error .= $errorMsg;
            return false;
        } else {
            return true;
        }
    }
    public function firstnameValidate($textvalue, $errorMsg = "please fill first name"){
        if($textvalue==""){
            $this->error .= $errorMsg . "<br />";
            return false;
        }
        else{
            return true;
        }

    }
    public function lastnameValidate($textvalue, $errorMsg = "please fill last name"){
        if($textvalue==""){
            $this->error .= $errorMsg . "<br />";
            return false;
        }
        else{
            return true;
        }

    }
    public function phoneValidate($textvalue, $errorMsg = "Please fill phone number"){
        if($textvalue==""){
            $this->error .= $errorMsg . "<br />";
            return false;
        }
        else{
            return true;
        }

    }
}