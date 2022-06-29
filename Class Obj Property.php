<?php

class Car //Cara buat class

{  
    var $type;
    var $paint;
    var $price;
}

$mclaren= new Car();
$avanza = new Car();  //Cara membuat objek yang di assign ke class
$ferari= new Car();

var_dump($mclaren); //print utk memastikan udh ke assign

$tesla = new Car();
$tesla -> type="mobil";
$tesla -> paint="ijo" ;   //Cara assign property
$tesla -> price= 69000;

var_dump($tesla);