<?php

$looping =1;
$while = [];

while ($looping <= 5) {
    $while[] = $looping;
    echo '<br>' . $looping++;
};

echo '<br>';
var_dump($while);
echo '<br>';
echo '<br>';
echo '<br>';

$looping = 5;
$while = [];

do {
 echo '<br>' . $looping--;
} while ($looping >=1);

var_dump($looping);
echo '<br>';
echo '<br>';
echo '<br>';

$looping = 5;
$while = [];

do{
    echo '<br>' . --$looping;
} while ($looping > 10);
echo '<br>';
echo '<br>';
echo '<br>';

//for ($i = 1; $i<10; $i++){
 // echo "<p style='font-size:12;color:red'>{$i}</p>";
//};

for($c =1; $c <= 10; $c++){
    if($c % 2 == 0 ){
        continue;
    }
    if($c > 7){
        break;
    }
    echo "<p>Pulou +2 >> {$c}</p>";
}

echo '<br>';
echo '<br>';
echo '<br>';

$arr = [];
for($ar = 1; $ar < 10; $ar++){
    $arr[] = $ar;
};
var_dump($arr);
echo '<br>';
echo '<br>';
echo '<br>';

$arr = [1,2,3,4,5,6];


// & comercial altera o valor original do array
/* foreach ($arr as &$v){
    $v *= 2;
    echo $v . "<br>";
};

print_r($arr); */
/* 
foreach ($arr as $key => $v){
$v *= 2;
// echo "Chave é $key e valor é $v" . '<br>';
$arr[$key] *=2;
echo $arr[$key] . '<br>';
};
 print_r($arr);
*/ 




?>