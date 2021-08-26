<?php

$siswa = array(

['Nama' => 'Patricia Joan', 'Kelas' => 'XI', 'Jurusan' => 'RPL'],
['Nama' => 'Jenners', 'Kelas' => 'XI', 'Jurusan' => 'RPL'],
['Nama' => 'Hailey Bieber', 'Kelas' => 'XI', 'Jurusan' => 'TKJ'],
['Nama' => 'Bella Hadid', 'Kelas' => 'XI', 'Jurusan' => 'TKJ'],

);

echo $siswa[0]['Nama']."<br>";
echo $siswa[0]['Kelas']."<br>";
echo $siswa[0]['Jurusan']."<br>";

$n = count($siswa);
for($i = 0; $i < $n; $i++){
    foreach($siswa[$i] as $key => $value) {
        echo $key ." : ". $value . "<br>";
    }
}

?> 
