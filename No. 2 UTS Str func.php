<?php
//Program mencari dan membandingkan kalimat atau string
$kalimat = 'Semasa lebaran John pergi ke puncak bersama anjing peliharaanya';

if (str_contains($kalimat, 'anjing')&str_contains($kalimat, 'John')) {

    echo 'Kalimat anda mengandung kata hewan peliharaan dan nama orang';
    echo 'Dan kalimat anda mengandung: ', (str_word_count($kalimat)), ' kata';

} else {

    echo 'Kalimat anda tidak mengandung kata hewan peliharaan';
    echo 'Dan kalimat anda mengandung: ', (str_word_count($kalimat)), ' kata';

}