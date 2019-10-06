<!-- Cara Pertama -->
<?php 
    $input = [1, 3, 2, 9, 4];
    $angka = 3;

     function arraykali($input,$angka){
         foreach ($input as $key ) {
              echo $key*$angka;
             echo "<br/>";
         }
       
     }

     echo arraykali($input, $angka);
?>


