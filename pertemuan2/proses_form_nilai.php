<?php
$nama =  $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$grade = ($uts + $uas + $praktikum) / 3;

echo '<br>Nama : ' . $nama;
echo '<br>Mata Kuliah : ' . $matkul;
echo '<br>Nilai UTS : ' . $uts;
echo '<br>Nilai UAS : ' . $uas;
echo '<br>Nilai Praktikum : ' . $praktikum;

echo "<br>Rata-rata : " . round(($uts + $uas + $praktikum) / 3);
echo("<br>");
if ($grade>=85)
echo("Grade : <b>A</b>");
elseif ($grade>=70)
echo("Grade : <b>B</b>");
elseif ($grade>=56)
echo("Grade : <b>C</b>");
elseif ($grade>=36)
echo("Grade : <b>D</b>");
elseif ($grade>=0)
echo("Grade : <b>E</b>");
elseif ($grade<=0)
echo("Grade : <b>I</b>");
?>