<?php

require __DIR__ . "/salario_bonus.php";

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
    <label for="nome"> Nome do empregado
    <input type="text" name="nome" id="nome">
    </label> <br>
    <label for="salario"> Salário fixo
        <input type="text" name="salario" id="salario">
    </label>
    <label for="vendas"> <br> Vendas efetuadas
        <input type="text" name="vendas" id="vendas">
    </label>
    <button type="submit">CALCULAR SALÁRIO POR HORAS TRABALHADAS</button>

</body>
</html>