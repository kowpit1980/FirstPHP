<?php
class Book{
 var $title;
 var $author;
 var $price;

 function setPrice($_price){
     $this->price = $_price;
 }
 function getPrice(){
     return $this -> price;
 }
function __construct( $_author, $_title){
    $this -> title = $_title;
    $this -> author = $_author;
}

 }

$fizyka = new Book("Mark Twain","teksańska masakra piłą" );
$matematyka = new Book("Lolly Holly", "Kaszanka na deser");
$chemia = new Book("Belly Dancer", "Ala ma kota");

echo $fizyka -> author. "<br>"









?>