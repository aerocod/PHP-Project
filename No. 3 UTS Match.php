<?php
$input = 7; //Input nomor 1-6
$hasil = match($input) {
    1 => "Adobe Photoshop", //<-Hasil ketika input 1
    2 => "Adobe Acrobat", //<-Hasil ketika input 2
    3 => "Microsoft Excel", //<-Hasil ketika input 3
    4 => "Microsoft Word", //<-Hasil ketika input 4
    5 => "Microsoft PowerPoint", //<-Hasil ketika input 5
    6 => "HTML", //<-Hasil ketika input 6
default=> "Miscellaneous", //<-Hasil ketika input selain no. 1-6
};
echo $hasil;