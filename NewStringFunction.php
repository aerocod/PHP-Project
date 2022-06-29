<?php

// contains - mengandung kata kata yang kita cari
var_dump(str_contains("Saya ingin Belanja Online di Tokopedia", "Tokopedia"&"Online"));
var_dump(str_contains("Kemarin saya pulang sekolah menggunakan Gojek", "Gojek"));
var_dump(str_contains("Wah ada promo terbaru di Grab Food", "Food"));

//  start with - mengandung kata kata yang kita cari di awal kata / kalimat
var_dump(str_starts_with("Belajar Node JS sangat mudah di BWA", "Belajar"));
var_dump(str_starts_with("PHP 8 adalah versi terbaru saat ini dari PHP", "PHP"));
var_dump(str_starts_with("Mudah sekali belajar Laravel 8", "Mudah"));

//  end with - mengandung kata kata yang kita cari di akhir kata / kalimat
var_dump(str_ends_with("Hari Senin", "Selasa"));
var_dump(str_ends_with("Hari Jumat", "Jumat"));
var_dump(str_ends_with("Hari Minggu", "Minggu"));