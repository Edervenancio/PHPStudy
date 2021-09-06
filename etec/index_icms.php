<?php
$msg = '';

if (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3']) && isset ($_POST['estado'])){
    extract($_POST);

    $total = $valor1 + $valor2 + $valor3;
    $msg = "Total do ICMS: ";

    switch($estado){
        case 'sp': $msg = $total * (18/100);  break;
        case 'mg': $msg = $total * (18/100);  break;
        case 'rj': $msg = $total * (22/100);  break;
        default: $msg = 'seleção inválida';
    }
}

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
<?php 

echo $msg;

?>

    <form action="index.php" method="post">


        <label>Produto 1<input type="text" name="valor1" maxlength="10"></label><br>
        <label>Produto 2<input type="text" name="valor2" maxlength="10"></label><br>
        <label>Produto 3<input type="text" name="valor3" maxlength="10"></label><br>

        <select name="estado">
            <option value="sp">SP - 18%</option>
            <option value="mg">MG - 20%</option>
            <option value="rj">RJ - 22%</option>
        </select>
    </form>
    <button type="submit">Calcular</button>
    <button type="reset">Limpar</button>


</body>

</html>