<?php

// desenvolver funções que recebem a média ponderada de um aluno.




function metroqd(){

    GLOBAL $comprimento;
    GLOBAL $largura;

    return $comprimento * $largura;
};


function soma($excedente){

    GLOBAL $valor1;
    GLOBAL $valor2;

    $somavalores = $valor1 + $valor2;
    $somavalores+= $excedente;

    return $somavalores;
};


function subtracao($n1 = 10, $n2 = 5, $n3 = 3){
   return $n1 - $n2 - $n3;
};
  


?>