<?php

$local = 3000;
$local1 = 5000;

function soma($valor){
    $local = 1500;
    return ($local  + $valor + $GLOBALS['local'] + $GLOBALS['local1']);
}

function subtracao($valor1, $valor2){
 return $valor1 - $valor2 - $GLOBALS['local'];
}



echo soma(1000);
echo '<br>';
echo subtracao(5000, 1);
echo '<br>';
echo 'O nome do arquivo atual é: ' . $_SERVER['PHP_SELF'];
echo '<br>';
echo 'Raiz do documento: ' . $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo 'Endereço do servidor: ' . $_SERVER['SERVER_NAME'];