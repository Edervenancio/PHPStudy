<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    
    <label for="nome">Nome:
        <input type="text" name="nome" id="nome">
    </label><br>
    <label for="email">Email:
        <input type="text" name="email" id="email">
    </label><br>
    <button type="submit">ENVIAR</button>
    
    </form>
    <?php
    if (isset($_GET['nome']) && isset($_GET['email'])){
  
     // $nome = $_GET['nome'];
     // $email = $_GET['email'];

extract($_GET, EXTR_PREFIX_ALL, 'xyz'); // extrai as variáveis do get
$email = 'teste@local.com';

      echo "Nome: $xyz_nome - E-mail: $xyz_email - E-mail local: $xyz_email";
    }
    ?>
</body>
</html>