<?php
function getJam($jam){
    return $jam;
}

class reward{
    public $jamPinjam=24;
    
    public function rate(){
        $jam=getJam($this);
        if($jam->jamPinjam<24){                 //Jam Pinjam kurang dari 24
            $batasPinjam="Batas Peminjaman 24 Jam";
        }
        else if($jam->jamPinjam >=24 && $jam->jamPinjam<=48){
            $batasPinjam="Mendapat Reward Perpanjangan Peminjaman Sebanyak 1 jam";
        }
        else if($jam->jamPinjam >=49 && $jam->jamPinjam<=72){
            $batasPinjam="Mendapat Reward Perpanjangan Peminjaman Sebanyak 2 jam";
        }
        else if($jam->jamPinjam >=73 && $jam->jamPinjam<=96){
            $batasPinjam="Mendapat Reward Perpanjangan Peminjaman Sebanyak 3 jam";
        }
        else if($jam->jamPinjam >=97 && $jam->jamPinjam<=120){
            $batasPinjam="Mendapat Reward Perpanjangan Peminjaman Sebanyak 4 jam";
        }
        else{
            $batasPinjam="Jam diluar jangkauan 0-120 Jam";
        }
        return $batasPinjam;
    }
}
class rateA extends rate
{
    public $jam = 23;
}
$A=new rateA();
echo$A->rateA();