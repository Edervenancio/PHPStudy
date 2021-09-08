<?php

/* Escreva um programa que leia o número de um funcionário, seu número de horas trabalhadas, 
o valor que recebe por hora e calcula o salário desse funcionário. A seguir, mostre o número e o salário do funcionário, com duas casas decimais.

O arquivo de entrada contém 2 números inteiros e 1 número com duas casas decimais, representando o número, 
quantidade de horas trabalhadas e o valor que o funcionário recebe por hora trabalhada, respectivamente.*/



$empregado = ["nome"=>"Eder","funcao"=>"Dev Junior"];

if(isset($_POST['valor1']) && (isset($_POST['valor2'])) && (isset($_POST['valor3']))){
    extract($_POST);

    $codigo = $valor1;
    $horas = $valor2;
    $ganho = $valor3;
    $salario = $valor2 * $valor3;
 echo "Código do empregado: $codigo" . "<br>";
 echo "O nome do empregado é " . $empregado['nome'] .  " sua função é de " . $empregado['funcao'] .  " e seu salário de R$" . number_format($salario, decimal_separator:",", thousands_separator:",");

 }

?>