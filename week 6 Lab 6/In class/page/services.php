<?php
  require("page.php");

  class ServicesPage extends Page
  {
    private $row2buttons = array(
                           "Re-engineering" => "reengineering.php",
                           "Standards Compliance" => "standards.php",
                           "Buzzword Compliance" => "buzzword.php",
                           "Mission Statements" => "mission.php"
                           );

    public function Display()
    {
      echo "<html>\n<head>\n";
      $this -> DisplayTitle();
      $this -> DisplayKeywords();
      $this -> DisplayStyles();
      echo "</head>\n<body>\n";
      $this -> DisplayHeader();
      $this -> DisplayMenu($this->buttons);
      $this -> DisplayMenu($this->row2buttons);
      echo $this->content;
      $this -> DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }


?>
