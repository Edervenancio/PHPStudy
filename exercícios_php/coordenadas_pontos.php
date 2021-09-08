<?php


// Leia 2 valores com uma casa decimal (x e y), que devem representar as coordenadas de um ponto em um plano. 
// A seguir, determine qual o quadrante ao qual pertence o ponto, ou na origem (x = y = 0).

if (isset($_POST['x']) && (isset($_POST['y']))){
    extract($_POST);

    if($x > 0 && $y > 0){
      echo "Os pontos estão no primeiro quadrante";
    } else if ($x < 0 && $y > 0){
        echo "Os pontos estão no segundo quadrante";
    } else if($x < 0 && $y < 0){
        echo "Os pontos estão no terceiro quadrante";
    } else if($x > 0 && $y < 0){
        echo "Os ponto estão no quarto quadrante";
    } else if($x = 0 && $y = 0){
        echo "Os pontos estão na origem";
    } else {
        echo "Ponto inválido";
    }
}


?>