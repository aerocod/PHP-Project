<?php
class Member
{
    
    function Denda_Member(string $Nama, $Id_Member, $Tanggal_Pinjam, $Tanggal_Kembali, int $Lama_Pinjaman, int $Denda){
        $Telat = $Lama_Pinjaman - 10;
        if ($Telat >= 1) {
            $Total_Denda = $Denda * $Telat;
        }
        echo"
        Nama = $Nama 
        ID Member = $Id_Member 
        Tanggal Pinjam = $Tanggal_Pinjam
        Tanggal Kembali = $Tanggal_Kembali
        Lama Pinjaman = $Lama_Pinjaman hari
        Telat = $Telat hari
        Denda = $Total_Denda
        ";
    }
}
    
$Data_Member = new Member();
$Data_Member -> Denda_Member("Dewansyah","11061100xx","12-01-2014","13-01-2014",11,250000);
?>