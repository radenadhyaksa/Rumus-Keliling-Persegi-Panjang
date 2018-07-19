<?php

print_r($_POST);
echo"<br>";
echo"<br>";

echo "nama : ". ($_POST["nama"]). "<br>";
echo "kelas : ". ($_POST["kelas"]). "<br>";
echo"<br>";
echo "panjang = ". ($_POST["panjang"]). "<br>"; 
echo "lebar = ". ($_POST["lebar"]). "<br>";



$panjang = $_POST["panjang"];
$lebar = $_POST["lebar"];
$kel = 2*($panjang+$lebar);

echo "keliling = ". ($kel. "<br>");

print_r ($_GET);




?>