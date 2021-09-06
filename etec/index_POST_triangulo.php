<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    
<form action="" method="post">
    <label for="valor1"> Valor 1
    <input type="text" name="valor1" id="valor1">
    </label> <br>
    <label for="valor2">Valor 2
        <input type="text" name="valor2" id="valor2">
    </label>
        <button type="submit">CALCULAR BASE DO TRIÂNGULO</button>
        
</form>









<?php
if (isset($_POST['valor1']) && isset($_POST['valor2'])){

    extract($_POST, EXTR_PREFIX_ALL, 'xyz');

    echo ($xyz_valor1 + $xyz_valor2) / 2;
} 



?>
</body>
</html>