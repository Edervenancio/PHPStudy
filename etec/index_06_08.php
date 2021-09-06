<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 150px;
        }
    </style>
</head>
<body>
    <?php

$ano_atual= 2021;
$ano_nascto = 1995;
$idade = $ano_atual - $ano_nascto;

/* 

 >= 0 e < 12 = criança
 >= 12 e < 18 = adolescente
 >= 70 = idoso

*/

if ($idade >= 0 && $idade < 12){
    echo '<img src="img/crianca.png">';
} else if ($idade >= 12 && $idade < 18){
    echo '<img src="img/adolescente.png">';
} else if ($idade >= 18 & $idade < 70){
    echo '<img src="img/adulto.png">';
} else {
    echo '<img src="img/idoso.png"';
}


?>
</body>
</html>