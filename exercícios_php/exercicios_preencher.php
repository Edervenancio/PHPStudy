<?php

//Leia um valor e faça um programa que coloque o valor lido na primeira posição de um vetor N[10]. 
//Em cada posição subsequente, coloque o dobro do valor da posição anterior. 
//Por exemplo, se o valor lido for 1, os valores do vetor devem ser 1,2,4,8 e assim sucessivamente. Mostre o vetor em seguida.


if(isset($_POST['vetor'])){
    extract($_POST);
/*
    $n[0] = $vetor;
    $n[1] = $n[0] *2;
    echo '<br>';
    $n[2] = $n[1] *2;
    echo '<br>';
    $n[3] = $n[2] *2;
    echo '<br>';
    $n[4] = $n[3] *2;
    echo '<br>';
    $n[5] = $n[4] *2;
    echo '<br>';
    $n[6] = $n[5] *2;
    echo '<br>';
    $n[7] = $n[6] *2;
    echo '<br>';
    $n[8] = $n[7] *2;
    echo '<br>';
    $n[9] = $n[8] *2;
    echo '<br>';
    echo '<hr/>';
    */


    for($i = 1; $i <= 10; ++$i){
        $n[0] = $vetor;
        $n[$i] = $n[$i - 1] * 2; 
    };

    print_r($n);
    

}
?>