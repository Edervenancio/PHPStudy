<?php

/*$ingredientes = 
['açucar',
'farinha de trigo', 
'ovo',
'leite',
'fermento em pó'];

$ingredientes2 = [
    ...$ingredientes,
    'corante'
];

echo $ingredientes2[4];

$lista1 = ['eder','pedro','venancio'];
$lista2 = ['joão','fabricia','melissa'];

$lista3 = [...$lista1,...$lista2];

echo "<br>";
print_r($lista3); */

$arra = array(1,2,3);
var_dump($arra);
echo '<br>';
$arra = [0, 1, 2, 3];
var_dump($arra);


echo '<br>';
echo '<br>';

$arrayIndex = [
  "Brian",
  "Angus",
  "Malcolm"
];
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phill";

var_dump($arrayIndex);

echo '<br>';
echo '<br>';
echo '<br>';
$arrayAssoc = [
"local"=> "Brian",
"Solo Guitar"=> "Angus",
"base_Guitar"=> "Malcolm",
"bass_guitar"=>"Cliff",
];

$arrayAssoc["drums"] = "Phill";
$arrayAssoc["rock_band"] = "AC/DC";
var_dump($arrayAssoc);
echo '<br>';
echo '<br>';


$brian = ["Brian", "Mic"];
$angus = ["name"=>"Angus", "instrument"=>"Guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);
echo '<br>';
echo '<br>';
echo '<br>';
var_dump([

    "brian"=>$brian,
    "angus"=>$angus,
]);

echo '<br>';
echo '<br>';
echo '<br>';
echo '-----';


$acdc = [
    "vocal"=> "Brian",
"solo_guitar"=> "Angus",
"base_Guitar"=> "Malcolm",
"bass_guitar"=>"Cliff",
"drums"=>"Phill"
];

echo '<br>';
echo "O vocal da banda é: " . ($acdc["vocal"]);
echo '<br>';
echo "O guitarrista da banda é: " . ($acdc["solo_guitar"]);

echo '<br>';
echo '<br>';
echo '<br>';

$pearl = [
    "vocal"=> "Eddie",
    "solo_guitar"=> "Mike",
    "base_Guitar"=> "Stone",
    "bass_guitar"=>"Keff",
    "drums"=>"Jack"
];

$rockband = [
    "pearl_jam"=>$pearl,
    "AC/DC"=>$acdc
];

echo "A banda é: " . ($rockband["pearl_jam"]);
print_r($rockband);
echo '<br>';
echo '<br>';
var_dump($rockband);
?>