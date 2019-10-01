<?php
     $input = [
        ['id' => 122, 'nama' => 'rama'],
        ['id' => 287, 'nama' => 'renaldy'],
        ['id' => 423, 'nama' => 'fakhri'],
    ];
    $carikey = 'nama';
    $carivalue = 'fakhri';

    foreach ($input as $key => $value) {
        if($value[$carikey] == $carivalue){
            $res = $key;
        }
    }
    echo "Index ke $res ";
    echo "<br>";
    echo $input[$res]['id']." ".$input[$res]['nama'];
?>