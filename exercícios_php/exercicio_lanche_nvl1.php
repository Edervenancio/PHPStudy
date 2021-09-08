<?php
require __DIR__ . "/funcao_lanche_nv1.php";

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
    <h1> CONFIRA A TABELA DE PREÇOS - SOMENTE 2 PRODUTOS</h1>
    <img src="https://resources.urionlinejudge.com.br/gallery/images/problems/UOJ_1038_pt.png">

    <form action="" method="post">
    <label for="codigo1"> Digite o código do seu produto
    <input type="text" name="codigo1" id="codigo1">
    </label> <br>
    <label for="codigo2">Digite a quantidade do seu produto
        <input type="text" name="quantidade" id="quantidade">
    </label>
        <button type="submit">CALCULAR O CUSTO</button>

        
</form>
</body>
</html>