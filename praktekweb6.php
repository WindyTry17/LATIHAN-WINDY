<?php

$hari = ["senin". "selasa"];

print_r($hari);
echo"</br>";
$hari[] = "Rabu"; //Menambahkan elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3] = "Kamis"; //Menambahkan elemen pada index yang kita tentukan.
                    //Jika index sudah terisi,maka elemen lama akan
                    // Digantikan dengan elemen baru.
print_r($hari);

?>