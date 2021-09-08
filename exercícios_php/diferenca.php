<?php

/* Leia quatro valores inteiros A, B, C e D. A seguir, 
calcule e mostre a diferença do produto de A e B pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).
O arquivo de entrada contém 4 valores inteiros.*/

if (isset($_POST['valor1'])&& (isset($_POST['valor2'])) && (isset($_POST['valor3'])) && (isset($_POST['valor4']))){
    extract($_POST);
    $a = $valor1;  $b = $valor2;
    $c = $valor3;  $d = $valor4;

    $diferenca = ($a * $b - $c * $d);
    echo "A diferença é de: " . number_format($diferenca, decimals: 2, decimal_separator:".");
}
?>