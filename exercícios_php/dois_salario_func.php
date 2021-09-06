<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário funcionario</title>
</head>
<body>

<h1>Informações do empregado</h1>



<form action="./dois_salario_func.php" method="post">
    <label for="salario">
        <input type="number" name="salario" id="salario">
        <button type="submit">CALCULAR</button>
    </label>
</form>


    <?php
//Calcule o salário de um funcionário com 15%

if (isset($_POST['salario'])){
    extract($_POST);
    global $teste;
    $salario = $teste;
};






    $funcionario = function() use ($salario){
        echo $salario;
        $nome = [
            "primeiro_nome"=>"Eder",
            "ultimo_nome"=>"Venâncio"
        ];

    $funcao = ["funcao"=>"Desenvolvedor", "cargo"=>"Junior"];

    $final = $salario * (0.15);

    echo "O seu funcionario tem como nome" . ($nome["primeiro_nome"]) . ($nome["nome_meio"]) . ($nome["ultimo_nome"]) . "<br>";
    echo "Seu salário é de: " . $salario . "com o reajuste de 50%";
};



?>
</body>
</html>