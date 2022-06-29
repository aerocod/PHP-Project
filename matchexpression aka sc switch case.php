<?php
$transportation='mobil'; //Input disini transportasi nya
$result= match($transportation){
    'mobil','motor','bus'=>'transportasi darat',
    'kapal'=>'transportasi laut',
    'peasawat','helikopter'=>'transportasi udara',
    default=>'Kendaraan not defined'
};

echo $result;

$berat_badan=50;

$results=match(true){
    $berat_badan >=100 =>"Kelebihan berat badan",
    $berat_badan >=90 =>"Sedikit kelebihan berat badan",
    $berat_badan >=80 =>"Berat badan kurang ideal",
    $berat_badan >=70 =>"Berat badan ideal",
    default=>"berat badan anda normal"
};

echo $results;

$kata=''; //input kata katanya untuk ngedetect
$res=match(true){
    str_contains($kata, 'shoppe')=>"Kalimat anda mengandung e-commerce",
    str_contains($kata, 'wtf')=>"kalimat anda mengadung kata kasar",
    str_contains($kata, 'ayam')=>"kalimat anda mengandung kata hewan ternak",
    default=>"kalimat anda tidak mengandung unsur apapun"
};
echo $res;