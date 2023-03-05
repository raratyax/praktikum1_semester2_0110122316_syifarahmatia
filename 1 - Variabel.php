<?php

// Variabel User //
$nama = "Rara"; # nama = "Rara"
$usia = 18;
$negara = "Indonesia";

echo $nama; # print(nama)

echo "<br/>";

echo " Nama saya ".$nama.", usia ".$usia," dari ".$negara;

echo "<br/>";

# nama saya Rara, usia 18, dari Indonesia

// Variael Sistem //
echo "Dokumen Root: ".$_SERVER["DOCUMENT_ROOT"]."<br>";
echo "Nama FIle: ".$_SERVER["PHP_SELF"];

echo "<br/>";

// Konstanta //
define("PHI",3.14);
$radius = 7;

$luas = PHI * $radius * $radius;
echo $luas;

?>