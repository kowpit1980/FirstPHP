<?php
require("book.php");




$fizyka = new Book("Mark Twain","teksańska masakra piłą" );
$matematyka = new Book("Lolly Holly", "Kaszanka na deser");
$chemia = new Book("Belly Dancer", "Ala ma kota");

echo $fizyka -> author. " - ";
echo $fizyka -> title. "<br>";
echo $matematyka -> author. " - ";
echo $matematyka -> title. "<br>";
?>