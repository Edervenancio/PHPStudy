<?php

// A fórmula para calcular a área de uma circunferência é: area = π . raio2. Considerando para este problema que π = 3.14159:
// - Efetue o cálculo da área, elevando o valor de raio ao quadrado e multiplicando por π.

if(isset($_POST['valor1'])){
    extract($_POST);

    $raio = $valor1;

    $area = ($raio * $raio) * pi();
    
    echo "A área é de: " . number_format($area, decimals:2,decimal_separator:",");
};
?>
