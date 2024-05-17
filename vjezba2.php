<?php

function daLiJeBrojParan($broj)
{
    if($broj == 0){
        die("Broj 0 se ne moze proslijediti kao argument");
    }else if($broj%2 == 0){
        echo "Broj je paran";
    }else {
        echo "Broj je neparan";
    }
}

daLiJeBrojParan(0);