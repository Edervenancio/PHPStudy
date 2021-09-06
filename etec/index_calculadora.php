<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- form:post>label*2>input:text^img^button:submit -->

<form action="index.php" method="post">
    <label for="valor1"> Valor 1
        <input type="text" name="valor1" id="valor1">
    </label> <br>
    <label for="valor2"> Valor 2
        <input type="text" name="valor2" id="valor2">
    </label> <br> Operador
    <select name="operador"> 
        <option value="">Selecione o operador...</option>
        <option value="+">Soma</option>
        <option value="-">Subtração</option>
        <option value="/">Divisão</option>
        <option value="*">Multiplicação</option>
    </select>
    <button type="submit">ENVIAR</button>
</form>
<?php

 if( isset($_POST['valor1']) && 
     isset($_POST['valor2']) && 
     isset($_POST['operador'])){

         extract($_POST, EXTR_PREFIX_ALL, 'xyz');

         if($xyz_operador=='+') echo $total = $xyz_valor1 + $xyz_valor2;
         else if($xyz_operador=='-') echo $total = $xyz_valor1 - $xyz_valor2;
         else if($xyz_operador=='*') echo $total = $xyz_valor1 * $xyz_valor2;
         else if($xyz_operador=='/') echo $total = $xyz_valor1 / $xyz_valor2;
         else echo 'Operador inválido';
     }

     

?>



</body>
</html>