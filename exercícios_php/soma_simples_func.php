<?php

//Leia dois valores inteiros, no caso para variáveis A e B. A seguir, calcule a soma entre elas e atribua à variável SOMA.
// A seguir escrever o valor desta variável.

// Imprima a mensagem "SOMA" com todas as letras maiúsculas, com um espaço em branco antes e depois da igualdade seguido pelo valor correspondente à soma de A e B.
// Como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".


if(isset($_POST['valor1']) && (isset($_POST['valor2']))){
    extract($_POST);
    $a = $valor1;
    $b = $valor2;
    echo "SOMA = " . $a + $b . "<br>" . "Programa encerrado.";
}

?>