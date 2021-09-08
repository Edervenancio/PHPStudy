<?php

//Faça um programa que leia um vetor X[10]. Substitua a seguir, todos os valores nulos e negativos do vetor X por 1.
// Em seguida mostre o vetor X.


$x = [0,1,2,-3,4,-5,6,0,7,10,8];

for($i = 0; $i < 10; $i++){
 if($x[$i] = 0 || $x[$i] < 0 ){
       $x[$i] = 1;
     
 };
};

echo '<pre>';
print_r($x);
echo '</pre>';
?>

