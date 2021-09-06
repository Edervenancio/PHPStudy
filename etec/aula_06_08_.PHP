<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP - 06/08/2021</title>
</head>
<body>
    <Style>
        .yellow{
            background-color: yellow;
            padding: 5px;
        }

        .blue{
            background-color: blue;
            padding: 5px;
        }

        .red{
            background-color: red;
            padding:5px;
        }

        .green{
            background-color: green;
            padding:5px;
        }

        .bloco {
            height:50px;
            width:50px;
            float: left;
        }
    </Style>
<?php
    for($i = 0; $i < 5; $i++)    {
?>
<div class="yellow">ETEC</div>
<div class="blue">ETEC</div>
    <?php 
    }
    ?>


<?php
for($i = 0; $i < 5; $i++){
?>
<div class="<?php $i%2 ? 'yellow' : 'blue' ?>">ETEC</div>
<?php 
    }
    ?>

    <?php
    for($i =0; $i<5; $i++){
        if($i%2){
    ?>
<div class="blue">ETEC</div>
<?php
        }else{
            ?>
            <div class="yellow">ETEC</div>
            <?php
            }
        }
        ?>

        <?php

for($i=0; $i < 5; $i++){
    $classe = ($i%2 ? 'red' : 'green');
     echo "<div class='$classe'>Etec</div>";
}?>
<br>

<?php 

$blocos = "<div class=\"bloco red\"></div>
<div class=\"bloco blue\"></div>
<div class=\"bloco green\"'></div>
<div class=\"bloco yellow\"></div>";
for($i=0; $i<2;$i++){
        echo $blocos;
}
?>
</body>
</html>