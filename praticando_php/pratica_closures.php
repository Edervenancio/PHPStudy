<?php

define('DATE_BR', "d/m/Y H:i:s");

//date_default_timezone_set('America/Sao_Paulo');

$salario = '';

$data = new DateTime("25-12-2021");


$decimo_terc = function($salario, $data){
   $salario = 2500;
   return "<p>Seu salário é de {$salario} e o receberá no dia {$data->format("d/m/Y")}</p>";
};




// echo "{$data->format("d/m/Y")}";

// criar uma closure e um date period no qual mostra o vencimento e o valor a se pagar



$inicio = new DateTime("now");

$intervalo = new DateInterval("P1M");

GLOBAL $divida, $valor;
$final = new DateTime("15-10-2022");

$periodo = new DatePeriod($inicio, $intervalo, $final);





echo $decimo_terc($salario, $data);



$divida = function($valor){
   GLOBAL $total;
   $total += $valor;
   return "Sua dívida está atualmente em {$total} e o vencimento será em: ";
};


foreach($periodo as $pagamentos){
   echo $divida(200) . "{$pagamentos->format("d/m/Y")}" . "<br>" ;
   if($total > 2500){
      echo "A sua divída em {$pagamentos->format("d/m/Y")} é de " .  $total . " e superou seu salário!";
   };
};  







