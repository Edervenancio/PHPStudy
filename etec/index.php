<?php

if (isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['valor'])){
    extract($_POST);
    session_start();
    $idx = 0;
    
if (isset ($_SESSION['idx'])){
    $idx = $_SESSION['idx'] + 1;
    $_SESSION['idx'] = $idx;
} else {
    $_SESSION['idx'] = $idx;
}

    $_SESSION['produto'][$idx] = ['codigo'=>$codigo, 'nome'=>$nome, 'valor'=>$valor];
    
    for ($i=0;$i < $idx; $i++){
        $produto = $_SESSION['produto'][$i];
        $msg .= $produto['codigo'] . ' - ' . $produto[1] . ' - ' . $produto[2] . '<br>';
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
    <form action="index.php" method="post">
        <label>Código:<input type="text" name="codigo"></label><br>
        <label>Nome:<input type="text" name="nome"></label><br>
        <label>Valor:<input type="text" name="valor"></label><br>
        <button type="submit">Incluir</button>
    </form>
    <?php echo $msg; $_POST = array(); ?>
</body>
</html>