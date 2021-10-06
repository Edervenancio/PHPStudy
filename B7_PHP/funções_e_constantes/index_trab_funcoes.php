<?php

require __DIR__ . "./trab_funcoes.php";
var_dump(functionName($arg1 = "Pearl Jam<br>", $arg2="AC/DC<br>",$arg3="After Bridge<br>"));
// abrindo a function criada e atribuindo valores aos argumentos
echo '<hr/>';
var_dump(functionName($arg1 = "Robson<br>", $arg2="Kaue<br>",$arg3="Gustavo<br>"));
echo '<hr/>';
// abrindo a function criada e atribuindo valores aos argumentos

var_dump(optionArgs($arg1 = "Robson"));
// criando o primeiro argumento
echo '<hr/>';
var_dump(optionArgs($arg1 = "Robson", $arg2 = "Kaue"));
// criando o primeiro e o segundo argumento, que agora não é obrigatório
echo '<hr/>';
var_dump(optionArgs($arg1 = "Robson", $arg2 = "Kaue", $arg3 = "Gustavo"));
// pode ser executada normalmente com os 3 argumentos
echo '<br>';
echo '<hr/>';

$weight = 68;
$height = 1.70;
// valores obtidos de trab_funções.php através do acesso GLOBAL
echo calcImc();
// execução da função do trab_funções.php 
echo '<br>';
echo '<br>';
echo '<hr/>';

$pay = paytotal($price = 200);
// criando uma variável e atribuindo o valor a ela ao chamar a função
$pay = paytotal($price = 350);
echo $pay;
echo '<br>';
echo '<br>';
echo '<hr/>';

var_dump(mytem("Kaue","Gustavo","Gah","João"));
// passando os argumentos para mytem (4 argumentos);
?>