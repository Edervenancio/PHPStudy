<?php
 /* echo "<p style='color:red'>Parágrafo em PHP usando ECHO</p>";
 print "<p style='color:blue'>Parágrafo em PHP usando PRINT</p>";
echo 2021 . '<br>' . '23-07-2021' . '<br>'; // comentario
echo .5 * .3 + 100/2 . '<br>';

$nome = "Etec";
$ano = 2021;
$hora = 10;


echo $nome . " - " . $ano . '<br>' ; // Concatenando com o . (ponto)

echo "$nome - $ano - {$hora}PM <br> "; //Concatenando com as variáveis dentro de aspas duplas

$valor1 = 10;
$valor2 = 20;
$total = $valor1 + $valor2;

echo "Soma: R$ $total <br>";
echo 'Soma: R$ ' . $valor1 + $valor2 . '<br>';


$valor1 = 1500; $valor2 = 2000;

echo 'Valor em R$: ' . $valor1 + $valor2 . "<br>";

$valor1 = $valor2 = 0;

echo 'Duas variáveis com mesmo valor: ' . $valor1 . $valor2 . "<br>";


$valor3; // uma variável sem valor contém o valor nulo. (null)


 
if($valor3==null){
    echo 'Variável Nula' . '<br>';
} else{
    echo $valor3;
}

define ('VLR' , 1000); // constante deve ser criada com letras maíusculas.

echo VLR;



# comentário de uma linha

/* comentário
de multiplas
linhas */ */ 

// Operadores lógicos
/*
 == : igualdade
 === : igualdade tanto nos dados quanto nos tipos de dados
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body{
            background: grey;
        }


    </style>
</head>
<body>
    <p style="color:green;"> Parágrafo em HTML
</body>
</html>