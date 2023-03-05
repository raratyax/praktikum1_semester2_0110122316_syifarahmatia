<?php

// Buat Array //

$presiden = ["Soekarno", "Soeharto", "Habiie", "Gus Dur", "Megawati"];

// Mengakses Data //
echo "Presiden kedua adalah ".$presiden [1];
echo "<br>";

// Mencetak seluruh data //
foreach($presiden as $x){
    echo $x. " ";
}

// Menambahkan data //
$presiden[] = "Prabowo";

echo "<br>";

// Mencetak seluruh data //
foreach($presiden as $x){
    echo $x. " ";
}
 
echo "<br>";

// Menghapus data //
unset($presiden[4]);

// Mencetak seluruh data //
foreach($presiden as $x){
    echo $x. " ";
}

echo "<br>";
// Mengubah data //
$presiden[3] = "Abdurrahman Wahid";

// Mencetak seluruh data //
foreach($presiden as $x){
    echo $x. " ";
}

echo "<br>";






?>