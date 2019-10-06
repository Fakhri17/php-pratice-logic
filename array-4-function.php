<?php
    $input = [
        ['id' => 122, 'nama' => 'Rama'],
        ['id' => 287, 'nama' => 'Renaldy'],
        ['id' => 423, 'nama' => 'Fakhri'],
    ];
    function cariId($arr, $cariId){
        $result = " not found ";
        foreach ($arr as $key => $value){
        if ($value['id'] == $cariId){
            $result = $key;
            echo " Index ke  ".$result;
            echo "<br>";
            echo " Id = ".$value['id'];
            echo "<br>";
            echo " Nama = ".$value['nama'];
            echo "<br>";
            echo "<br>";
            }
        }
        if ($result != null) {
            if($result > 0){
                $result = " ";
            }
            echo $result;
        }
    }
    cariId($input, 122);
    cariId($input, 287);
    cariId($input, 423);
    cariId($input, 100);
   
?>

<br>
<br>