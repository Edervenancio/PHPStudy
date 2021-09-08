<?php

/* 
Média Aritmética Ponderada
A média aritmética ponderada é calculada multiplicando cada valor do conjunto de dados pelo seu peso.
Depois, encontra-se a soma desses valores que será dividida pela soma dos pesos.

Leia 3 valores, no caso, variáveis A, B e C, que são as três notas de um aluno. A seguir, calcule a média do aluno,
sabendo que a nota A tem peso 2, a nota B tem peso 3 e a nota C tem peso 5. Considere que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.

O arquivo de entrada contém 3 valores com uma casa decimal, de dupla precisão (double).

S
Imprima a mensagem "MEDIA" e a média do aluno conforme exemplo abaixo, com 1 dígito após o ponto decimal e com um espaço em branco antes e depois da igualdade. 
Assim como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".
*/

if(isset($_POST['valor1']) && (isset($_POST['valor2'])) && (isset($_POST['valor3']))){
    extract($_POST);

    $nota1 = $valor1 * 2;
    $nota2 = $valor2 * 3;
    $nota3 = $valor3 *5;
    $media = ($nota1+$nota2+$nota3) / 10;

    echo "A média ponderada é de : " . number_format($media, decimals:1, decimal_separator:",");
};


?>