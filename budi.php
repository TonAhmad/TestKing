<?php
include_once("mahasigma.php");

$budi = new Mahasigma(9418320770,"budi",75);

echo "nim saya: {$budi->nim}";
echo "<br>";
echo "nama saya adalah: {$budi->nama}";
echo "<br>";
echo "nilai saya:{$budi->nilai}";
echo "<br>";
echo $budi->hitungnilai();
