<?php
     $input = [
        ['id' => 122, 'nama' => 'Rama'],
        ['id' => 287, 'nama' => 'Renaldy'],
        ['id' => 423, 'nama' => 'Fakhri'],
    ];
    $carikey = 'nama';
    $carivalue = 'Fakhri';

    foreach ($input as $key => $value) {
        if($value[$carikey] == $carivalue){
            $res = $key;
        }
    }
    echo "Index ke $res ";
    echo "<br>";
    echo " Id : ".$input[$res]['id']." Nama : ".$input[$res]['nama'];
?>