<?php

/* Faça um programa que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). 
Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o total a receber no final do mês, com duas casas decimais.

O arquivo de entrada contém um texto (primeiro nome do vendedor) e 2 valores de dupla precisão (double) com duas casas decimais, 
representando o salário fixo do vendedor e montante total das vendas efetuadas por este vendedor, respectivamente.*/


if(isset($_POST['salario']) && (isset($_POST['vendas'])) && (isset($_POST['nome']))){
extract($_POST);

$empregado[] = $nome;

$comissao = $vendas * (0.15);
$salariofinal = $salario + $comissao;

echo "O empregado $empregado[0] teve como comissão o valor de $comissao, totalizando seu salário para $salariofinal";
 

}
?>