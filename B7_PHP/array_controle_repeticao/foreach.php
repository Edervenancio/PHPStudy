<?php
  
 $transp = array("Carro","Moto","Bicicleta","Ônibus","Avião","Navio");
// para cada elemento do array transp, o elemento é colocado em veiculo

 foreach($transp as $veiculo){
   echo "<pre>";
   echo "$veiculo";
   //if ($veiculo == "Bicicleta")
   //break;
      echo "</pre>";  
 };

 echo "<hr/>";

 foreach ($transp as $veiculo){
  if($veiculo == "Bicicleta")
    echo "Bicicleta está na lista de veículos<br>";
    if($veiculo == "Trem")
    echo "Trem está na lista de veículos";
 };


 echo '<hr/>';

$numeros = array(1=>2, 2=>4,3=>6);
// números é transformado em numero, o dobro recebe o associativo de número que era numeros
foreach ($numeros as $numero => $dobro){
    echo "O número $numero tem como o dobro dele $dobro. ";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>