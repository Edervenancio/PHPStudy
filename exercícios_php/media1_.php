<?php

/* Leia 2 valores de ponto flutuante de dupla precisão A e B, que correspondem a 2 notas de um aluno. A seguir, calcule a média do aluno,
 sabendo que a nota A tem peso 3.5 e a nota B tem peso 7.5 (A soma dos pesos portanto é 11). 
 Assuma que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.
O arquivo de entrada contém 2 valores com uma casa decimal cada um.*/

// Média Aritmética Ponderada
//A média aritmética ponderada é calculada multiplicando cada valor do conjunto de dados pelo seu peso.
//Depois, encontra-se a soma desses valores que será dividida pela soma dos pesos.

if(isset($_POST['valor1']) && (isset($_POST['valor2']))){
    extract($_POST);
    $nota1 = $valor1 * 3.5;
    $nota2 = $valor2 * 7.5;
    $media = ($nota1 + $nota2) / 11;
    echo "A sua média é de: " . number_format($media, decimals:5,decimal_separator:",");
};

?>