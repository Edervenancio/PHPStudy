<?php
$msg = '';
$res = false;
if( isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone'])){
    extract($_POST);
    if (isset($_FILES['foto'])){
        //var_dump($_FILES['foto']); // lista o conteúdo do vetor
        $foto = $_FILES['foto'];
        if (file_exists($foto['tmp_name'])){
           $res = (move_uploaded_file($foto['tmp_name'], 'img/' . $foto['name']));
        }
    }
    $img = 'img/' . $foto['name'];
    $msg = "$nome - $email - $telefone <br>";
    $msg .= $res ? "<img src='img/{$foto['name']}'>" : 'A foto não pode ser gravada';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PWII - 27/08</title>
</head>
<body>
    <?php echo $msg;?>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label>Nome: <input type="text" name="nome"></label><br>
    <label>Email:<input type="text" name="email"></label><br>
    <label>Telefone:<input type="text" name="telefone"></label><br>
    <label> Foto: 
        <input type="file" name="foto" >
    </label>
    <button type="submit">ENVIAR</button>
</form>


</body>
</html>