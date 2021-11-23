<?php

include  __DIR__ . "/calculo_simples.php";

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
    



   <form method="post">
    <label for="codigo1"> Digite o código da primeira peça
        <input type="text" name="codigo1" id="codigo1">
    </label>
<br>
    <label for="codigo2"> Digite o código da segunda peça 
        <input type="text" name="codigo2" id="codigo2">
    </label>
<br>

<label for="qtd1"> Digite a quantidade da primeira peça
        <input type="text" name="qtd1" id="qtd1">
    </label>
<br>
    <label for="qtd2"> Digite a quantidade da segunda peça 
        <input type="text" name="qtd2" id="qtd2">
    </label>
<br>

<label for="valor1"> Digite o valor da primeira peça
        <input type="text" name="valor1" id="valor1">
    </label>
<br>
    <label for="valor2"> Digite o valor da segunda peça 
        <input type="text" name="valor2" id="valor2">
    </label>
<br>
<button type="submit">CALCULAR</button>
 



</body>
</html>