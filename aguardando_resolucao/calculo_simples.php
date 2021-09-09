<?php


/* Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2,
 o número de peças 2 e o valor unitário de cada peça 2. Após, calcule e mostre o valor a ser pago.

O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores, respectivamente dois inteiros e um valor com 2 casas decimais.*/

if(isset($_POST['codigo']) && isset($_POST['numero1']) && 
   isset($_POST['valor1']) && isset($_POST['codigo2']) &&
   isset($_POST['numero2']) && isset($_POST['valor2'])){
    extract($_POST);

    echo "Peça 1 - Código: $codigo // Quantidade: $numero1 // Valor: $valor1";
    echo "Peça 2 - Código: $codigo2 // Quantidade: $numero2 // Valor: $valor2";
    echo "Total a se pagar: " . ($valor1 * $numero1) + ($valor2 * $numero2);
}


?>

