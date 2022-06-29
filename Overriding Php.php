<?php

function getJam($jam)
{
    return $jam;
}

class member
{
    public $jamPinjam = 23;

    public function rate()
    {
       $jam=getJam($this);
        if($jam->jamPinjam<24){                
            $batasPinjam="
            Batas Peminjaman Minimal 24 Jam";                                     //Jam Pinjam <24 Member

        }
        else if($jam->jamPinjam >=24 && $jam->jamPinjam<=48){
            $batasPinjam="
            Mendapat Reward Perpanjangan Peminjaman Sebanyak 1 jam";      //Jam Pinjam Member A
        }
        else if($jam->jamPinjam >=49 && $jam->jamPinjam<=72){
            $batasPinjam="
            Mendapat Reward Perpanjangan Peminjaman Sebanyak 2 jam";      //Jam Pinjam Member B
        }
        else if($jam->jamPinjam >=73 && $jam->jamPinjam<=96){
            $batasPinjam="
            Mendapat Reward Perpanjangan Peminjaman Sebanyak 3 jam";      //Jam Pinjam Member C
        }
        else if($jam->jamPinjam >=97 && $jam->jamPinjam<=120){
            $batasPinjam="
            Mendapat Reward Perpanjangan Peminjaman Sebanyak 4 jam";      //Jam Pinjam Member D
        }
        else{
            $batasPinjam="
            Jam diluar jangkauan 0-120 Jam";                              //Ketentuan Jam Pinjam
        }
        return $batasPinjam;
    }
}


class memberA extends member
{
    public $jamPinjam = 24;
}

class memberB extends member
{
    public $jamPinjam = 49;
}

class memberC extends member
{
    public $jamPinjam = 73;
}

class memberD extends member
{
    public $jamPinjam = 97;
}



$MEMBER = new member(); echo $MEMBER->rate(); //Member <24 Jam
$A = new memberA(); echo $A->rate();          //Member A
$B = new memberB(); echo $B->rate();          //Member B
$C = new memberC(); echo $C->rate();          //Member C
$D = new memberD(); echo $D->rate();          //Member D
//Refrence https: //www.materi-it.com/2015/10/implementasi-override-dalam-php-oop.html