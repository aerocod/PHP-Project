<?php
interface Supir{
}
interface Mobil{
}
interface RentalSupir extends Supir{
    // function getData():void;
    function getNama():string;
    function getNip():int;
}
interface RentalMobil extends Mobil{
    function getMerek():string;
    function getNomorPolisi():int;
    function getExit():void;
}
class ProsesMeminjam implements RentalSupir, RentalMobil{
    public function getData(): void{
        echo"
        Selamat Datang di Rental Mobil,

        Mohon Mengisi Data Diri dan Mobil Yang Ingin DIpinjam:
        ";
    }
    public function getNama():string{
        return "Nama: Andi || NIP: ";
    }
    public function getNip(): int{
        return 1234; 
    }
    public function getMerek(): string{
        return " || Merek Mobil: Toyota || Nomor Polisi: ";
    }
    public function getNomorPolisi(): int{
        return 12345;
    }
    public function getExit(): void{
        echo"
        
        Salam Hangat,
        Rental Mobil
        ";
    }
}

class ProsesPengembalian implements RentalMobil,RentalSupir{
    public function getData(): void{
        echo"
        Selamat Datang di Rental Mobil,

        Terima Kasih Telah Merental Mobil di Rental Mobil,
        ";
    }
    public function getNama():string{
        return"Nama: Andi || NIP: "; 
    }
    public function getNip(): int{
        return 1234;
    }
    public function getMerek():string{
        return " || Merek Mobil: Toyota || Nomor Polisi: ";

    }
    public function getNomorPolisi(): int{
        return 12345;
    }
    public function getExit(): void{
        echo"
        
        Salam Hangat,
        Rental Mobil
        ";
    }
}
$ProsesRental = new ProsesMeminjam();
echo $ProsesRental->getData();
echo $ProsesRental->getNama();
echo $ProsesRental->getNip();
echo $ProsesRental->getMerek();
echo $ProsesRental->getNomorPolisi();
echo $ProsesRental->getExit();

$ProsesMeminjam = new ProsesPengembalian();
echo $ProsesMeminjam->getData();
echo $ProsesMeminjam->getNama();
echo $ProsesMeminjam->getNip();
echo $ProsesMeminjam->getMerek();
echo $ProsesMeminjam->getNomorPolisi();
echo $ProsesMeminjam->getExit();