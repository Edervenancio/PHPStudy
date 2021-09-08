<?php

require __DIR__ . "/salario.php";

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
    
<form action="" method="post">
    <label for="valor1"> Código do empregado
    <input type="text" name="valor1" id="valor1">
    </label> <br>
    <label for="valor2"> Horas trabalhadas
        <input type="text" name="valor2" id="valor2">
    </label>
    <label for="valor2"> <br> Ganho por hora
        <input type="text" name="valor3" id="valor3">
    </label>
    <button type="submit">CALCULAR SALÁRIO COMISSIONADO</button>

</body>
</html>