<?php
$msg = '';
$res = false;
  if (isset($_POST['nome']) && isset($_POST['email']) && isset ($_POST['telefone'])){
      extract($_POST);
      if (isset($_FILES['foto'])){
          $foto = $_FILES['foto'];
          //var_dump ($_FILES['foto']); //lista o conteúdo do vetor
          if(file_exists($foto['tmp_file'])) {
              $res = move_uploaded_file($foto['tmp_file'], 'fotos/' . $foto['name']);
          }
      }
      $msg = "$nome - $email - $telefone <br>";
      $msg .= $res ? "<img src='fotos/{$foto['name']}'>" : 'A foto não pôde ser gravada';
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
    <?php echo $msg; ?>

    <!-- form:post>label*3>input:text^button:submit -->
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nome"> Nome:
        <input type="text" name="nome" id=""> <br>
        </label>
        <label for="email"> Email:
        <input type="text" name="email" id="">  <br>
        </label>
        <label for="telefone">Telefone
            <input type="text" name="" id="telefone"> <br>
        </label> <br>
        <label> Foto:
            <input type="file" name="foto">
        </label>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>