<?php


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 30-07 - PWII</title>
</head>

<body>
    <h3> Operadores Lógicos e Matemáticos </h3>
    <?php

    // Operadores lógicos
    /*
            ==  : igualdade
            === : igualdade tanto nos dados quanto nos tipos de dados

            !=  : diferente
            !== : diferente tanto nos dados quanto nos tipos de dados
            <>  : diferente
        */

    $valor1 = 100;
    $valor2 = '100';

    if ($valor1 == $valor2)
        echo 'Os números são iguais<br>';
    else
        echo 'Os números são diferentes<br>';

    if ($valor1 <> $valor2)
        echo 'Os números são diferentes<br>';
    else
        echo 'Os números são iguais<br>';

    /* <, <=, >, >=, ! */

    $valor1 = 102;
    $valor2 = 101;

    if ($valor1 >= $valor2)
        echo 'Valor1 é maior ou igual ao Valor2<br>';
    else
        echo 'Valor2 é maior que o Valor1<br>';

    if (!($valor1 >= $valor2))
        echo 'Valor1 é maior ou igual ao Valor2<br>';
    else
        echo 'Valor2 é maior que o Valor1<br>';

    // echo '<script>confirm("Deseja continuar?")</script>';

    /* 1. Crie um programa em PHP que leia uma 
           variável de 0 até 9 e imprima o valor por extenso 
        */

    /*
            Operadores matemáticos
            + : soma
            - : subtração
            * : multiplicação
            / : divisão
            % : resto da divisão
        */

    $valor1 = 50;
    $valor2 = 2;
    $total = 0;

    $total = $valor1 + $valor2;
    echo "Total = $total<br>";

    $total += 100; // $total = $total + 100;
    echo "Total = $total<br>";

    $total++; // $total = $total + 1;
    echo "Total = $total<br>";

    ++$total;
    echo "Total = $total<br>";

    $total--;
    echo "Total = $total<br>";

    $total /= 2; // $total = $total / 2;
    $total *= 5; // $total = $total * 5;

    $num = 2;

    if ($num % 2)
        echo "O número $num é ímpar<br>";
    else
        echo "O número $num é par<br>";

    /* Estruturas de decisão 

            if..else if.. elseif .. else
            switch(expressão/valor) case: ...; break; default: ;
            operador ternário - expressão booleana ? verdade : falso;
            $valor ?? $valor_alternativo;
        */

    /* 2. Elabore um programa que leia uma variável mes com números
              de 1 até 12, calcule e mostre o mês por extenso. */
    $mes = 8;

    if ($mes == 1) echo 'Janeiro';
    elseif ($mes == 2) echo 'Fevereiro';
    elseif ($mes == 3) echo 'Março';
    elseif ($mes == 4) echo 'Abril';
    elseif ($mes == 5) echo 'Maio';
    elseif ($mes == 6) echo 'Junho';
    elseif ($mes == 7) echo 'Julho';
    elseif ($mes == 8) echo 'Agosto';
    elseif ($mes == 9) echo 'Setembro';
    elseif ($mes == 10) echo 'Outubro';
    elseif ($mes == 11) echo 'Novembro';
    elseif ($mes == 12) echo 'Dezembro';
    else echo 'Número inválido';    
    echo '<br>';

    switch ($mes) {
        case 1: echo 'Janeiro'; break;
        case 2: echo 'Fevereiro'; break;
        case 3: echo 'Março'; break;
        case 4: echo 'Abril'; break;
        case 5: echo 'Maio'; break;
        case 6: echo 'Junho'; break;
        case 7: echo 'Julho'; break;
        case 8: echo 'Agosto'; break;
        case 9: echo 'Setembro'; break;
        case 10: echo 'Outubro'; break;
        case 11: echo 'Novembro'; break;
        case 12: echo 'Dezembro'; break;
        default: echo 'Número inválido';
    } // fim do switch

    echo '<br>';

    // operador ternário (expressão booleana) ? verdade : falso;
    $nome = 'etec';
    echo (($nome == 'etec') or ($nome == 'ETEC')) ? 'verdade<br>' : 'falso<br>';
    if (($nome == 'etec') or ($nome == 'ETEC')) echo 'verdade<br>'; else echo 'falso<br>';

    // operador ternário (expressão booleana) ?? retorno alternativo
    //$preco = 1000;
    echo $preco ?? '0.00';
    echo '<br>';

    // usando a função isset() para verificar se a variável está declarada
    echo isset($preco) ? $preco : '0.00';
    echo '<br>';

    echo "<p style=\"color: red\">$nome</p>";

    /*  Estruturas de repetição 

        for: sintaxe for($inicio; $limite; $incremento/$decremento)
        while: while($limite) { $limite++/$limite-- }
        do..while: do { $limite++/$limite-- } while($limite);
        foreach ???? 
        
    */

    /*
    for ($i=0; $i<10; $i++) 
        echo "$i, ";
    echo '<br>';
    
    for ($i=20; $i>10; $i--)
        echo "$i, ";
    echo '<br>';
    */

    /*
    for ($i=1; $i<11; $i++) {
        for ($j=1; $j<11; $j++) {
            echo "$i * $j = " . $i * $j . "<br>";
        }
        echo '==========</br>';
    } */
    /*
    $i = 0;
    while (++$i < 11) {
        $j=0;
        while (++$j < 11) {
            echo "$i * $j = " . ($i * $j) . "<br>";
        }    
        echo '==========</br>';               
    }
    */

    $i = 1;
    do {
        $j=1;
        do {
            echo "$i * $j = " . ($i * $j) . "<br>";
        } while (++$j < 11); 
        echo '==========</br>';               
    } while (++$i < 11);
    ?>
</body>

</html>