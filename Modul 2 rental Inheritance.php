<?php
//Inheritance Rental Mobil 
class Rental{
    //Supir Attributes
    var int $nip;
    var string $nama;
    
    //Mobil Attributes
    var int $nomor_polisi;
    var string $merk_mobil;

    function meminjam_supir(int $nip){
        echo"
        Selamat Datang di Rental Mobil,
        
        Mohon Mengisi Data Diri dan Mobil Yang Ingin Dipinjam:
        Nama: {$this->nama}
        NIP: {$nip}";
    }
    function meminjam_mobil(int $nomor_polisi){
        echo"
        Nomor Polisi: {$nomor_polisi}
        Merk Mobil: {$this->merk_mobil}
        
        Salam Hangat,
        Rental Mobil
        ".PHP_EOL;
    }

    function mengembalikan_supir(int $nip){
    echo "
        Selamat Datang di Rental Mobil,

        Terima Kasih Telah Merental Mobil di Rental Mobil,
        Nama: {$this->nama}
        NIP: {$nip}";
    }

    function mengembalikan_mobil(int $nomor_polisi){
    echo "
        Nomor Polisi: {$nomor_polisi}
        Merk Mobil: {$this->merk_mobil}

        Salam Hangat,
        Rental Mobil
        " . PHP_EOL;
    }

}
class Supir extends Rental{
    
}
class Mobil extends Rental{
    
}
//Fungsi Meminjam Mobil dan Prosedur Isi Data, Contoh:
// $Rental=new Rental();
// $Rental->nama="Anto";
// $Rental->meminjam_supir(1234);
// $Rental->merk_mobil="Ferrari";
// $Rental->meminjam_mobil(12345);

//Input Pada Saat Melakukan Peminjaman
$supir = new Supir();
$supir->nama="Andi";
$supir->meminjam_supir(54321); //input nip

$mobil = new Mobil();
$mobil->merk_mobil="Mercedez Benz S2500";
$mobil->meminjam_mobil(54321); //input nomor_polisi/ plat nomor

//Input Pada Saat Melakukan Pengembalian
$supir = new Supir();
$supir->nama = "Andi";
$supir->mengembalikan_supir(54321); //input nip

$mobil = new Mobil();
$mobil->merk_mobil = "Mercedez Benz S2500";
$mobil->mengembalikan_mobil(54321); //input nomor_polisi/ plat nomor