<?php

//Faça um programa que leia um vetor X[10]. Substitua a seguir, todos os valores nulos e negativos do vetor X por 1.
// Em seguida mostre o vetor X.


$x = [0,1,2,-3,4,-5,6,0,7,10];

 /* for($i = 0; $i < 10; $i++){
 if($x[$i] = 0 || $x[$i] < 0 ){
       if(in_array(0, $x)){
         unset($xprint_r($x);
       };
     
 };
};  */



 //$b = 0;
//$c = 1;

 /* for($i = 0; $i < 10; ++$i){
      if($x[$i] = 0 || $x[$i] < 0 ){
           $a = $x[$i] = 1;
      
if(in_array(0, $x)){
      unset($x[array_search(0,$x)]);
}}};  */


/* $a = 0;
$b = 1;
for($i = 0; $i < 10; ++$i){
      if(in_array(0, $x)){
            unset($x[array_search(0,$x)]);
            array_push($x, 1);
      }}; 
     
*/

for($i = 0; $i < 10; ++$i){
      if($x[$i] <=0){
             $x[$i] = 1;
             array_filter($x);
      };
};
      


 echo '<pre>';
 print_r($x);
 echo '</pre>';
?>

