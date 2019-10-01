<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  
  function arraysearch($arr, $ID, $VALUE){
    foreach ($arr as $key => $value){
      if ($value[$ID] == $VALUE){
        $result = $key;
        return $result;
      }
    }
  }
  $result = arraysearch($input, 'id', 423);
  echo "Index ke-".$result."<br>";
  echo "Id= ".$input[$result]['id'].", Nama= ".$input[$result]['nama'];
?>