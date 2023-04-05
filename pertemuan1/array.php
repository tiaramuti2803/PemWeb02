<?php
// array index
$animals = ['Kambing', 'Kucing', 'Ayam'];

// akses semua nilai array
foreach($animals as $animal){
    echo $animal . '<br>';
}

// array assosiatif
$student = [
    'name' => 'Yazid Ahmadridho Alhafiezd',
    'major' => 'Informatics',
    'age' => 20
];

echo $student['name'];