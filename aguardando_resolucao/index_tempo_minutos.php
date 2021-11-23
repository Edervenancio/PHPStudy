<?php

include __DIR__ . "/tempo_minutos.php";

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
    <label for="hinicial"> Digite a hora inicial do jogo
        <input type="text" name="hinicial" id="hinicial">
    </label>
<br>
    <label for="minicial"> Digite o minuto inicial do jogo
        <input type="text" name="minicial" id="minicial">
    </label>
<br>

<label for="hfinal"> Digite a hora final do jogo
        <input type="text" name="hfinal" id="hfinal">
    </label>
<br>
    <label for="mfinal"> Digite a quantidade da segunda peça 
        <input type="text" name="mfinal" id="mfinal">
    </label>
<br>

<button type="submit">CALCULAR</button>


</body>
</html>