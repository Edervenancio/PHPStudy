<?php
//Leia 2 valores inteiros e armazene-os nas variáveis A e B. Efetue a soma de A e B atribuindo o seu resultado na variável X. 
//Imprima X conforme exemplo apresentado abaixo. Não apresente mensagem 
//alguma além daquilo que está sendo especificado e não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error"


if(isset($_POST['valor1']) && (isset($_POST['valor2']))){
    extract($_POST);

    $x = $valor1 + $valor2; 
    echo "X = $x";
}
?>