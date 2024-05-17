<?php

function izracunajPDV($pdv)
{
    $stopaPdv = 0.22;

    if($pdv < 1){
        echo "Broj ne moze biti manji od 1";
    }else if (is_string($pdv) )
    {
        echo "Broj mora biti numericka vrijednost";
    }else {
        echo $pdv * $stopaPdv;
    }
}

izracunajPDV(1);