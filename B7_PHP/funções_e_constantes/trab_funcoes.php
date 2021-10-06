<?php
// função, nome da função e os argumentos
// o que está aqui
function functionName($arg1, $arg2, $arg3){
    // os argumentos são valores tragos de fora para dentro
    // não está aqui
  $body = [$arg1, $arg2, $arg3];
  return $body;
}

function optionArgs($arg1, $arg2 = true, $arg3 = null){
    // criando a função com os argumentos opcionais ao final da função - o primeiro é obrigatório - 
    // o segundo é importante - o terceiro são opcionais.
    $body = [$arg1, $arg2, $arg3];
    return $body;
};

// global acess

function calcImc(){
    global $weight;
    global $height;
    // variáveis globais que não são protegidas pelo escopo, podem ser acessadas em outros arquivos.
    return $weight / ($height * $height);
   };



   // += é maior igual
   // x += y
   // x = x + y

   function paytotal($price){
    static $total ;
    // atributo estático próprio da função. Toda vez que executar a função, o valor estará atribuido.
    $total += $price;
    return "o Total a pagar é R$" . number_format($total, decimals:2, decimal_separator:",", thousands_separator:",");
   };

   function mytem(){
       $teamNames = func_get_args();
       // receber os argumentos
       $teamCount = func_num_args();
       // quantidade de argumentos
       return["members"=>$teamNames, "count"=> $teamCount];
   };