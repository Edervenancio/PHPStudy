<?php

function functionName($arg1, $arg2, $arg3){
  $body = [$arg1, $arg2, $arg3];
  return $body;
}

function optionArgs($arg1, $arg2 = true, $arg3 = null){
    $body = [$arg1, $arg2, $arg3];
    return $body;
};

// global acess

function calcImc(){
    global $weight;
    global $height;
    return $weight / ($height * $height);
   };



   // += é maior igual
   // x += y
   // x = x + y

   function paytotal($price){
    static $total ;
    $total += $price;
    return "o Total a pagar é R$" . number_format($total, decimals:2, decimal_separator:",", thousands_separator:",");
   };

   function mytem(){
       $teamNames = func_get_args();
       $teamCount = func_num_args();
       return["members"=>$teamNames, "count"=> $teamCount];
   };