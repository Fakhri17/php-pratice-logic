<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  
  function arraysearch($input, $ID, $VALUE){
    $result = " Not Found";
    foreach ($input as $key => $value){
      if ($value[$ID] == $VALUE){
        $result = $key;
        echo " Index ke ".$result;
        echo "<br>";
        echo  " Id = ".$value['id'];
        echo "<br>";
        echo " Nama = ".$value['nama'];
        echo "<br>";
        echo "<br>";
      }
    }
    if ($result != null) {
      if ($result > 0 ) {
        $result = "";
      }
      echo $result;
    }
  }

  arraysearch($input, 'id', 122);
  arraysearch($input, 'id', 287);
  arraysearch($input, 'id', 423);
  arraysearch($input, 'id', 100);
  
?>