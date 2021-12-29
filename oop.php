<?php


  class person{
    public $name;
    function set_name($new_name){
      $this->name = $new_name;
    }
    function get_name(){
      return $this->name;
    }
  }
  
 

  class math{

    private $math1;
    private $math2;
    
    public function __construct($var1, $var2){
      $this->math1 = $var1;
      $this->math2 = $var2;
      echo "<br>".($this->math1 + $this->math2);
     
    }

    public function totalNumber(){
      return $this->math1 + $this->math2;
    }

    public function multipyNumber(){
      return $this->math1 * $this->math2;
    }
  }

  $name = new person();
  $name->set_name("Fakhri Alauddin");
  echo $name->nama = 'Fakhri';
  echo "<br>".$name->get_name();


  $defination = new math(12, 13);

  $output1 = $defination->totalNumber();
  echo "<br>".$output1;

  $output2 = $defination->multipyNumber();
  echo "<br>".$output2;
?>