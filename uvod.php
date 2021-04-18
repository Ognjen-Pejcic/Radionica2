<?php

//echo "Pozdrav"."drugi tekst"."<br>"."drugi tekst";
//
#/**/ */

#---------------Promenljive---------------

$prom1 = "string";
echo gettype($prom1);

#---------------String---------------

echo  "<br>".strlen($prom1);
#---------------Date---------------

echo date("d/M/Y H:i:s");

#---------------Nizovi---------------

$niz = ["string"];

function ispis(){

    return "string";
}

echo ispis();
?>