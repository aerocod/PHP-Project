<?php
declare(strict_types=1); //Declare tipe atribut

// Membuat Atribut Ip 
#[\Attribute]
class Ip_Attribute
{
    public function __construct(public int|float $testArgument)
    {}
}

// Apply Ip_Attribute Menggunakan Contoh Integer
#[Ip_Attribute (1,2,3,4)]                                               //Atribut yang digunakan ialah Ip
class IpClass
{

}

// Mengambil metadata menggunakan relfection class dari Ip_Attribut
$reflection = new \ReflectionClass(Ipclass::class);
$classAttributes = $reflection->getAttributes();

($classAttributes[0]->newInstance()->testArgument);

//Assign Tipedata di Setiap Variabel
class ip
{
    public int|float $ip1;
    public int|float $ip2;
    public int|float $ip3;
    public int|float $ip4;             
    public int|float $ip5;
    public int|float $ip6;
    public int|float $ip7;
    public int|float $ip8;   
}

    function ipk($ip1,$ip2,$ip3,$ip4,$ip5,$ip6,$ip7,$ip8) //Fungsi Menghitung IPK Selama 8 Semester
    {
        echo"Hasil IPK Selama 8 Semester: ",($ip1+$ip2+$ip3+$ip4+$ip5+$ip6+$ip7+$ip8)/8;
    }
    return ipk(3.5,3,3.9,4,2.98,3,3.1,3.3);