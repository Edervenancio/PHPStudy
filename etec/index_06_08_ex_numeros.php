<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 06-08</title>
    <style>
        img{
            height: 150px;
            border:1px solid #000;
            padding: 10px;

        }
    </style>
</head>
<body>
    <?php 
 for ($i=0;$i<21;$i++){
    //echo "<img src='img/" . $i . ".png ' alt=''>";
    switch($i) {
        case 10: echo "<img src='img/1.png' alt=''>
                       <img src='img/0.png' alt=''><br>"; break;
        case 11: echo "<img src='img/1.png' alt=''>
                       <img src='img/1.png' alt=''><br>"; break;
        default: echo  "<img src='img/$i.png' alt=''><br>";

    }
 }


 for ($i=0; $i < 12; $i++) {
    if ($i == 10) echo "<img src='img/1.png' alt=''>
    <img src='img/0.png' alt=''><br>";
    else if ($i == 11) echo "<img src='img/1.png' alt=''>
    <img src='img/1.png' alt=''><br>";
    else echo "<img src='img/$i.png' alt=''><br>";
    }
    ?>
    

<!--
    <img src='img/0.png' alt=''>
    <img src='img/1.png' alt=''>
    <img src='img/2.png' alt=''>
    <img src='img/3.png' alt=''>
    <img src='img/4.png' alt=''>
    <img src='img/5.png' alt=''>
    <img src='img/6.png' alt=''>
    <img src='img/7.png' alt=''>
    <img src='img/8.png' alt=''>
    <img src='img/9.png' alt=''>
-->
</body>
</html>