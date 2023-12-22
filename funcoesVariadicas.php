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
echo "<br>";

// Exemplo 2

function exemplo2($a1, $a2, ...$rest){
    echo $a1."<br>";
    echo $a2."<br>";
    foreach($rest as $r){
        echo $r."<br>";
    }
};

exemplo2("Gian", "Mateus", "Paola", "Cerveja", "Gelo", "Churrasco");
echo "<br>";

// Exemplo 3

function nomeados(...$params){
    foreach($params as $key => $value){
        echo "{$key}: {$value} <br>";
    }
}

nomeados(Gian: 18, Paulo: 32, Gabriel: 48);

// Exemplo 4
function calcularMedia($aluno,...$notas){
    echo "Aluno: {$aluno} <br>";
    echo "Media: ". array_sum($notas) / count($notas);
};

calcularMedia("Gian", 10,4,8);
echo "<br>";

// Exercicio 1
/* CRIE UMA FUNÇÃO QUE MOSTRE O MENOR E MAIOR NUMERO CONTIDO NO PARAMETRO VARIADICO */

function minMax(...$n){
    echo "Mínimo: ".min($n)."<br> Maximo: ".max($n);
}

minMax(4,10,22,9,8,6);
?>