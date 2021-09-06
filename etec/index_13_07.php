<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // criando uma variável
    $mensagem = '<span style="color:red">Boa noite</span>';
    // echo $mensagem;
    $mensagem2 = '<span style="color:blue">Etec 2021</span>';
    //echo $mensagem2;
    // echo $mensagem . $mensagem2;

    echo "$mensagem $mensagem2 Turma de DS";
    

    $mensagem3 = "<div style='background: gray; float:right; width: 200px;'>$mensagem $mensagem2 Turma de DS</div>";
    echo $mensagem3;

    $mensagem4 = "<div style='background: gray; float:left; width: 200px;'>ETEC DR CAROLLINO DA MOTTA E SILVA</div>";
    echo $mensagem4;

    $valor1 = 1000;
    $valor2 = 250.56;
    $total = $valor1 + $valor2;

    echo "<div>$valor1 <br> $valor2</div>";
    echo "<div>{$total}</div>";
                    //0 
    $vetor = array('Pinhal', 'São João', 'Andradas', 'Jacutinga');
    echo "<div>$vetor[0]</div>";
    $vetor = ['Pinhal', 'São João', 'Andradas', 'Jacutinga'];
    echo "<div>$vetor[2]</div>";

    $vetor = [10, 'String', true, 10.67, $valor1];
    echo $vetor[1];

    $estados = ['SP', 'MG', 'RJ', 'ES', 'PA', 'PR', 'TO', 'AM'];

    for ($i=0; $i < count($estados); $i++){
        echo $estados[$i] . ' , ';

    };

    ////////////////////////////////////
echo '<br><br>';
    $numero = 135;
    $unidade = $numero % 10;
    echo $unidade;
    ?>
</body>
</html>