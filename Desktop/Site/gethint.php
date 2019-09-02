<?php

$a[] = "Tirana";
$a[] = "Andorra la Vella";
$a[] = "Yerevan";
$a[] = "Vienna";
$a[] = "Baku";
$a[] = "Riga";
$a[] = "Vaduz";
$a[] = "Vilnius";
$a[] = "Luxembourg";
$a[] = "Minsk";
$a[] = "Brussels";
$a[] = "Sarajevo";
$a[] = "Sofia";
$a[] = "Skopje";
$a[] = "Valletta";
$a[] = "Chisinau";
$a[] = "Monaco";
$a[] = "Podgorica";
$a[] = "Zagreb";
$a[] = "Nicosia";
$a[] = "Prague";
$a[] = "Copenhagen";
$a[] = "Tallinn";
$a[] = "Helsinki";
$a[] = "Paris";
$a[] = "Tbilisi";
$a[] = "Berlin";
$a[] = "Athens";
$a[] = "Budapest";
$a[] = "Reykjavik";
$a[] = "Dublin";
$a[] = "Rome";
$a[] = "Astana";
$a[] = "Pristina";
$a[] = "Vatican City";
$a[] = "Kyiv ";
$a[] = "Ankara";
$a[] = "Bern";
$a[] = "Stockholm";
$a[] = "Madrid";
$a[] = "Ljubljana";
$a[] = "Bratislava";
$a[] = "Belgrade";
$a[] = "San Marino";
$a[] = "Moscow";
$a[] = "Bucharest";
$a[] = "Lisbon";
$a[] = "Warsaw";
$a[] = "Oslo";
$a[] = "Amsterdam";
$a[] = "Podgorica";
$a[] = "Chisinau";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>