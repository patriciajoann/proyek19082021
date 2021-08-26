<?
$nilai = 85;

if ($nilai > 90) {
    echo "Nilai " .$nilai. ". Predikat A+";
}
elseif ($nilai > 80 dan <= 90){
    echo "Nilai " .$nilai. ". Predikat A";
}
elseif ($nilai > 70 dan <= 80) {
    echo "Nilai " .$nilai. ". Predikat B+";
}
elseif ($nilai > 60 dan <= 70){
    echo "Nilai " .$nilai. ". Predikat B";
}
elseif ($nilai > 50 dan <= 60){
    echo "Nilai " .$nilai. ". Predikat C+";
}
elseif ($nilai > 40 dan <= 50) {
    echo "Nilai " .$nilai. ". Predikat C";
}
elseif ($nilai > 30 dan <= 40) {
    echo "Nilai " .$nilai. ". Predikat D";
}
elseif ($nilai <= 30 ) {
    echo "Nilai " .$nilai. ". Predikat E";
}



?>