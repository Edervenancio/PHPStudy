<?php

// Escolha uma palavra, deixe ela em CAIXA ALTA e a corte deixando somente a primeira e a ultima palavra.

$string = "Don't stop me now";

$newstring = mb_strtoupper($string);
echo mb_substr($newstring, 0, 5);




?>