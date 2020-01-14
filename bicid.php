<?php

// Masukkan Kalimat
 echo " Masukkan Kalimat : ";
 $kata = trim(fgets(STDIN)); 


 // buat replace string
 $konsonan = array("a", "u", "e", "o", "A", "U", "E", "O");
 $hasil = str_replace($konsonan, "i", $kata);

 // nah ini outputnya
 echo "\n\n Hasilnya : " . $hasil . "\n";
 exit(0);
 ?>