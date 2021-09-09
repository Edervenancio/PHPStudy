<?php

require __DIR__ . "/calculo_simples.php";

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
    <h1>PEÇAS - CÁLCULO SIMPLES</h1>
<form action="" method="post">
    <label for="codigo"> Código da peça 1
    <input type="text" name="codigo" id="codigo">
    </label> <br>
    <label for="numero1"> Quantidade de peça 1
        <input type="text" name="numero1" id="numero1">
    </label>
    <label for="valor1"> <br> Valor da peça 1
        <input type="text" name="valor1" id="valor1">
    </label>
<br>
<br>
    <label for="codigo2"> Código da peça 2
    <input type="text" name="codigo2" id="codigo2">
    </label> <br>
    <label for="numero2"> Quantidade de peça 2
        <input type="text" name="numero2" id="numero2">
    </label>
    <label for="valor2"> <br> Valor da peça 2
        <input type="text" name="valor2" id="valor2">
    </label>
</form>

    
    <button type="submit">CALCULAR SALÁRIO POR HORAS TRABALHADAS</button>
</body>
</html>