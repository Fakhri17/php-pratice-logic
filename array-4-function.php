<?php 
      $input = [
        ['id' => 122, 'nama' => 'rama'],
        ['id' => 287, 'nama' => 'renaldy'],
        ['id' => 423, 'nama' => 'fakhri'],
    ];
    $cari = '122';

    function arraysearch($input,$cari){
        foreach ($input as $key => $value) {
            if ($value['id'] == $cari) {
                $cari = $key;
                return $cari;
            }
        }
    }

    echo arraysearch($input,$cari);
    echo " <br> ";
    echo $cari." berada di index ke ".arraysearch($input,$cari);
?>