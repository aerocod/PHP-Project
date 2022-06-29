<?php
$a=2+2;

$hasil=match(true){
    $a == 3 =>"Value is below",
    $a == 4 =>"Spot on",
    $a == 5 =>"Value is too large",
    default =>"Unknown value"
};
echo $hasil;