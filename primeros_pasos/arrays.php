<?php

$arr2 = array(
    "1111A" => "Juan Vera Ochoa",
    "1112A" => "Maria Mena Cabeza",
    "1113A" => "Ana Puertas Peral"
);

foreach ($arr2 as $nombre) {
    echo "$nombre <br>";
}

echo "<hr>";

foreach ($arr2 as $codigo => $nombre) {
    echo "Codigo: $codigo - Nombre: $nombre <br>";
}
