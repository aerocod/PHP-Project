<?php
interface HasBrand{
    function getBrand():string;
}

interface IsMaintenance{
    function isMaintenance():bool;
}
    
interface Motor extends HasBrand{
    function drive():void;
    function getTire():int;
}


class Xmax implements Motor,IsMaintenance{
    public function drive():void{
        ECHO "Drive xmax". PHP_EOL;
    }
    public function getTire(): int
    {
        return 2;
    }
    public function getBrand(): string
    {
        return "Yamaha";
    }
    public function isMaintenance(): bool
    {
        return false;
    }
}

$motor = new Xmax();
echo $motor->getBrand(); //drive, gettire, getbrand, ismaintenance
echo $motor->drive();
echo $motor->getTire();