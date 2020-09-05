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
  
  $name = new person();
  $name->set_name("Fakhri Alauddin");
  echo $name->nama = 'Fakhri';
  echo " \nMy name is ".get_name();
?>