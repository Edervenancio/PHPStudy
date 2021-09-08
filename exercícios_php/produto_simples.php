<?php
/* Leia dois valores inteiros. A seguir, calcule o produto entre estes dois valores e atribua esta operação à variável PROD. 
A seguir mostre a variável PROD com mensagem correspondente.   

O arquivo de entrada contém 2 valores inteiros.

Imprima a mensagem "PROD" e a variável PROD conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade.
 Não esqueça de imprimir o fim de linha após o produto, caso contrário seu programa apresentará a mensagem: “Presentation Error”.
*/

if(isset($_POST['valor1']) && (isset($_POST['valor2']))){
    extract($_POST);
    $prod = $valor1 * $valor2;
    echo "PROD = $prod" . "<br>" . "fim do programa.";
}

?>