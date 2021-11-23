<?php


/* Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2,
 o número de peças 2 e o valor unitário de cada peça 2. Após, calcule e mostre o valor a ser pago.

O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores, respectivamente dois inteiros e um valor com 2 casas decimais.*/


if(isset($_POST['codigo1']) && isset($_POST['codigo2']) && 
   isset($_POST['qtd1']) && isset($_POST['qtd2']) &&
   isset($_POST['valor1']) && isset($_POST['valor2'])){

    $postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);


    if($postArray){
          if(in_array("",$postArray)){
            echo "<p>Preencha todos os campos!</p>";
        } 
          else {
            // $saveStrip = array_map("strip_tags", $postArray);
            // $save = array_map("trim", $saveStrip);
            extract($_POST);

            $a = $valor1 * $qtd1;
            $b = $valor2 * $qtd2; 
            $c = $a + $b;

            echo "Código da peça 1: {$codigo1} <br> Quantidade: {$qtd1} <br> Valor Unitário: {$valor1} ";
            echo '<hr/>';
            echo "Código da peça 2: {$codigo2} <br> Quantidade: {$qtd2} <br> Valor Unitário: {$valor2} ";
            echo '<br>';
            echo "Valor total: " . $c;
            echo '<br';
            echo '</hr>';
        };

  


   } 
};
