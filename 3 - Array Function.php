<?php

$mahasiswa = ["Yaqub Qamar Ad-din Dibiazah", "Khalid Kashmiri", "Khidr
Karawita", "Ismail Ahmad Dabanawi", "Usman Abdel Jalil Shisha", "Muhammad
Sumbul"];


// sort //
sort($mahasiswa);

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

echo "<br>";

// arsort //
sort($mahasiswa);

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

// push //
array_push($mahasiswa, "Udin");

echo "<br>";

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

// unshift //
array_unshift($mahasiswa, "Nidu");

echo "<br>";

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

?>