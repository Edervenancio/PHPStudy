<?php

if(isset($_POST['codigo1']) && (isset($_POST['quantidade']))){
  extract($_POST);
    

  if($codigo1 = 1){
      $codigo1 = 4;
  } else if($codigo1 = 2){
      $codigo1 = 4.5;
    } else if($codigo1 = 3){
      $codigo1 = 5.0 ;
  } else if($codigo1 = 4 ){
      $codigo1 = 2;
  } else if($codigo1 = 5){
      $codigo1 = 1.5;
  } else {
      echo "Valor inválido";
  }

 echo "O valor é de: " . $codigo1 * $quantidade;
    };

    

 // operador ternário (expressão booleana) ? verdade : falso;
 
?>