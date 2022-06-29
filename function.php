<?php

class Car{
    var $type;
    var $paint;
    var $price;

    function tipe_mobil($type){
        echo "Tipe Mobil anda adalah: {$type}";
    }
    
}
$mclaren = new Car();
$mclaren -> tipe_mobil("mclaren");