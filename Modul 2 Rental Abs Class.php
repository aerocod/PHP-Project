<?php

abstract class Rental{
    public function rental(){
        echo"
        Selamat Datang di Rental Mobil,
        
        Mohon Mengisi Data Diri dan Mobil Yang Ingin Dipinjam:
        Nama: {$this->nama}
        NIP: {$this->nip}";    
    }
    public function rentall(){
        echo"
        Nomor Polisi: {$this->nomorpolisi}
        Merek Mobil: {$this->merekmobil}
        
        Salam Hangat,
        Rental Mobil
        ";
    }
    public function rrental(){
        echo"
        Selamat Datang di Rental Mobil,

        Terimakasih telah melakukan transaksi di rental mobil:
        Nama: {$this->nama}
        NIP: {$this->nip}";
    }
    public function rrrental(){
        echo"
        Nomor Polisi: {$this->nomorpolisi}
        Merek Mobil: {$this->merekmobil}

        Salam Hangat,
        Rental Mobil
        ";
    }
}

class Peminjaman extends Rental{
    public $nama="Andi";
    public $nip=1234;
    public $nomorpolisi=12345;
    public $merekmobil="Peugeot";
    public function rentalsupir()
    {
        return  $this->rental();
    }
    public function rrentalsupir(){
        return $this->rentall();
    }
}

class Pengembalian extends Rental{
    public $nama="Andi";
    public $nip=1234;
    public $nomorpolisi=12345;
    public $merekmobil="Peugeot";

    public function rentalmobil(){
        return $this->rrental();
    }
}

$Peminjaman= new Peminjaman();
echo $Peminjaman->rental();
echo$Peminjaman->rentall();               //Return Function Ke Proses Peminjaman


$Pengembalian= new Pengembalian();
echo $Pengembalian->rrental();   
echo$Pengembalian->rrrental();           //Return Function ke Proses Pengembalian