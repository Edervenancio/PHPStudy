<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais - GET </title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
          <label for="nome"> Nome:
              <input type="text" name="nome" id="nome">
            </label>
            <label for="email"> <br> Email:
                <input type="email" name="email" id="email">
            </label>
        <button type="submit">ENVIAR</button>

    </form>
<?php

if ( isset($_GET['nome']) && isset($_GET['email'])){
//$nome = $_GET['nome'];
//$email = $_GET['email'];
extract($_GET, EXTR_PREFIX_ALL, "xyz");
$email = 'teste@local.com';

echo "Nome: $xyz_nome - E-mail local: $email - E-mail: $xyz_email";
}


    ?>
</body>
</html>