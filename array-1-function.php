<?php 
     $input = [1, 3, 2, 9, 4];
    $angka = 3;

     function arraysearch($input,$angka){
         foreach ($input as $key ) {
             echo $key *= $angka;
             echo "<br/>";
         }
       
     }

     echo arraysearch($input, $angka);
?>