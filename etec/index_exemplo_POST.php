<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="calcular.php" method="post">
    <label for="valor1">
        <input type="text" name="valor1" id="valor1">
</label>
<br>
    <label for="valor2">
        <input type="text" name="valor2" id="valor2">
</label> <br>
operador: <select name="operador">
<option value="+" selected>Selecione o operador..</option>
<option value="+" >SOMA</option>
<option value= "-">SUBTRAÇÃO</option>
<option value="*">MULTIPLICAÇÃO</option>
<option value="/">DIVISÃO</option>
</select> <br>
<button type="submit">ENVIAR</button>
</form>



</body>
</html>