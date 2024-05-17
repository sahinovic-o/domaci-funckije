<?php

function saberi($broj1, $broj2)
{
   if($broj1 == 0 || $broj2 == 0){
    die("Ne smijete unijeti 0");
   }else {
    echo $broj1 + $broj2;
   }
}

saberi(5,0);