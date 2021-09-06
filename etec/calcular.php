<?php
 if ( isset($_POST['valor1']) && 
 isset ($_POST['valor2']) &&
  isset ($_POST['operador']) ) {
      extract ($_POST, EXTR_PREFIX_ALL, 'xyz');

      if ($xyz_operador == 'x') echo $xyz_total = $xyz_valor1 + $xyz_valor2;
      else if($xyz_operador == '-') echo $xyz_total = $xyz_valor1 - $xyz_valor2;
      else if($xyz_operador == '*') echo $xyz_total = $xyz_valor1 + $xyz_valor2;
      else if($xyz_operador == '/') echo $xyz_total = $xyz_valor1 / $xyz_valor2;
      else echo 'operador inválido';
      
  }
?>