<?php

class Member{


    function Daftar_Member(string $Nama_Depan, string $Nama_Belakang, $Id, $Alamat, $No_Telp, int $Tahun_Bergabung){ //Function Dengan Parameter Data type assigned
        echo "{$Nama_Depan} {$Nama_Belakang}, {$Id} dengan alamat di {$Alamat} dan nomor telepon {$No_Telp} bergabung menjadi member di Prodase Rent Car sejak tahun {$Tahun_Bergabung}";
    }
}
$Data_Member = new Member();        //Object dan properties
$Data_Member -> Daftar_Member("Ucup","Rahmadi","11061100xx","Sukabirus","08211988xx",2011); //Assign argument dari Daftar_Member function and its parameter.
?>