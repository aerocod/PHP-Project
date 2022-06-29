<?php
class Pilot
{

    var string$name;
    function information(string$destination){
        echo"Hello everyone,my name is{$this->name}.I'm telling you we're going
        to be flying at 29,000 feet to{$destination}".PHP_EOL;
    }
}
class Copilot extends Pilot{
    
}

$pilot = new Pilot();
$pilot->name = "Achmad";
$pilot->information("CGK-LBJ");

$copilot = new Copilot();
$copilot->name = "Fauzi";
$copilot->information("LBJ-DPS");