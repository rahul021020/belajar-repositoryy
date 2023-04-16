<?php
$p = $_POST['panjang'];
$l = $_POST['lebar'];

echo "Panjang : $p <br>";
echo "Lenar : $l <br>";
$keliling = 2 * $p + 2 * $l;

echo "Keliling Bangun Persegi Panjang : $keliling";