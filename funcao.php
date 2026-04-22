<?php
function somar($a, $b){
    return $a + $b;
}

function subtração($a, $b){
     return $a-$b;
}

function multi($a, $b){
    return $a*$b;
}
    
function dividir($a, $b){
    if ($b == 0){
        return "erro: divisao por zero";
    }
    return $a / $b;
}
