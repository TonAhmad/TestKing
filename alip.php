<?php 
include_once("person.php");

$alip = new Person();
$alip->name=("Alip");
$alip->city=("bekasi");
$alip->country=("indonesia");

echo $alip->name;
echo "<br>";
echo $alip->city;
echo "<br>";
echo $alip->country;
?>