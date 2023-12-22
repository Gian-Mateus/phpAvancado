<?php
// Exemplo 1

function soma(...$ns){
    $result = 0;
    foreach ($ns as $n) {
        $result += $n;
    }
    return $result;
}

echo soma(10,20,45,78,90);
?>