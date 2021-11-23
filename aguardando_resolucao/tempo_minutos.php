<?php

/* Leia a hora inicial, minuto inicial, hora final e minuto final de um jogo. A seguir calcule a duração do jogo.

Obs: O jogo tem duração mínima de um (1) minuto e duração máxima de 24 horas.

Entrada
Quatro números inteiros representando a hora de início e fim do jogo.

Saída
Mostre a seguinte mensagem: “O JOGO DUROU XXX HORA(S) E YYY MINUTO(S)” .*/



if(isset($_POST['hinicial']) && is_integer($_POST['hinicial']) &&
   isset($_POST['minicial']) && is_integer($_POST['minicial']) &&
   isset($_POST['hfinal']) && is_integer($_POST['hfinal']) &&
   isset($_POST['mfinal']) && is_integer($_POST['mfinal'])){

    extract($_POST);

    $validateArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    echo $hinicial;

    if($validateArray){
        if(in_array("",$validateArray)){
            echo "<p>Preencha todos os campos!</p>";
        } else if ($validateArray < 1 && $validateArray > 24){
            echo "<p>Digite apenas números entre 1 minuto e 24 horas</p>";
        } else {

            $horai = $hinicial; $minutoi = $minicial;
            $horaf = $hfinal;;  $minutof = $mfinal;

            $duracaoh = $horaf - $horai;
            $duracaom = $minutoi - $minutof;

            echo "A duração da partida durou {$duracaoh} horas e {$duracaom} minutos";
        }
    };
       
   };
