<?php
class AlatMusik
{
    public string $alatmusik;

    public function __construct(string $alatmusik)
    {
        $this->alatmusik = $alatmusik;
    }


}

class gitar extends AlatMusik
{

}

class drum extends AlatMusik
{

}

class Bunyi
{
    var AlatMusik $alatmusik;


}

$bunyi = new Bunyi();
$bunyi->alatmusik = new gitar("Jreng");
$bunyi->alatmusik = new drum("dum dum dum");

function mainkanMusik(AlatMusik $alatmusik)
{
    echo "bunyi {$alatmusik->alatmusik} <br>";
}

mainkanMusik(new gitar("Jreng"));
mainkanMusik(new drum("dum dum dum"));