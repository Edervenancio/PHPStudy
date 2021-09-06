<?php 

function soma($valor) {
    $local = 1500;

    return ($local + $valor + $GLOBALS['local'] + $GLOBALS['local1']);
} 

$local = 3000;
$local1 = 5000;

function subtracao($valor1, $valor2){
     return $valor1 - $valor2 - $GLOBALS['local'];
     // echo $valor1 - $valor2 - $GLOBALS['local];
}


echo soma(0);
echo "<br>";
echo subtracao(5000, 50);
//subtracao(5000,500)

echo '<br> O nome arquivo atual é: ' . $_SERVER['PHP_SELF'];

echo '<br>Raiz do documento: ' . $_SERVER['DOCUMENT_ROOT'];

echo '<br>Endereço do servidor: ' . $_SERVER['SERVER_ADDR'];

echo '<br>Nome do servidor: ' . $_SERVER['SERVER_NAME'] ;
?>