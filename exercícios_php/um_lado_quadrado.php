


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>CALCULE O QUADRADO TRIÂNGULO ABAIXO</h1>
<form action="./um_lado_quadrado.php" method="post">
<input type="number" name="valor">
<button type="submit">CALCULAR</button>
</form>
<?php

if(isset($_POST['valor'])){
    extract($_POST);
    echo '<br>'. $valor * $valor;
};



?>
</body>
</html>