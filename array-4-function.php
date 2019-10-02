<!-- cara pertama -->
<?php
    $input = [
        ['id' => 122, 'nama' => 'Rama'],
        ['id' => 287, 'nama' => 'Renaldy'],
        ['id' => 423, 'nama' => 'Fakhri'],
    ];
    function cariId($arr, $cariId){
        $res = -1;
        foreach ($arr as $key => $value){
        if ($value['id'] == $cariId){
            $result = $key;
            }
        }
        return $result;
    }
    $result = cariId($input, 122);
    echo "Index ke-".$result."<br>";
    echo "Id= ".$input[$result]['id'].", Nama = ".$input[$result]['nama'];
?>

<br>
<br>


<!-- cara kedua -->
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
   
?>