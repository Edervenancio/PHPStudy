<?php
require __DIR__ . "/coordenadas_pontos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1> CONFIRA OS PONTOS DO PLANO CARTESIANO</h1>
    <img src="https://resources.urionlinejudge.com.br/gallery/images/problems/UOJ_1041.png">
    <form action="" method="post">
    <label for="x"> Digite o ponto X
    <input type="text" name="x" id="x">
    </label> <br>
    <label for="y">Digite o ponto y
        <input type="text" name="y" id="y">
    </label>
        <button type="submit">CALCULAR O QUADRANTE</button>
 
</body>
</html>