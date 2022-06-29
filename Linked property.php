<?php

require_once("Class Obj Property.php");

$lambo=new Car();
$lambo -> type="Mobil";
$lambo -> paint= "merah";  //Cara assign linked property ke class dengan membuat obj
$lambo -> price= 99000;

var_dump($lambo);