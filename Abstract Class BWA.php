<?php
abstract class Location
{
    public string $name;
}

class City extends Location{
    
}

class Province extends Location{
    
}

class Country extends Location{
    
}

$city=new City();
$city->name="Jakarta";
$province=new Province();
$country=new Country();
var_dump($city);