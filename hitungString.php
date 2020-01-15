<?php
echo " Masukkan Kalimat : ";
$kalimat = trim(fgets(STDIN));

$jumlah = strlen($kalimat);

echo "\n\nJumlah String : " . $jumlah . "\n";
exit(0);
?>