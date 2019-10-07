<?php
    $input = [
        ['id' => 122, 'nama' => 'Rama'],
        ['id' => 287, 'nama' => 'Renaldy'],
        ['id' => 423, 'nama' => 'Fakhri'],
    ];
    $cari = '122';

    foreach ($input as $key => $value) {
        if ($value['id'] == $cari) {
            $res = $key;
        }
    }
    echo "Index ke ".$res;
    echo "<br>";
    echo " Id : ".$input[$res]['id']." Nama : ".$input[$res]['nama'];
?>