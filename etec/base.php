<?php
// área = (base*altura) /2 
if ( isset($_POST['base']) && 
 isset ($_POST['altura'])) {
      extract ($_POST, EXTR_PREFIX_ALL, 'xyz');

$resultado = ($xyz_base * $xyz_altura) / 2;

      echo "$resultado"; 

 }
?>