<?php

require __DIR__ . "./trab_funcoes.php";
var_dump(functionName($arg1 = "Pearl Jam<br>", $arg2="AC/DC<br>",$arg3="After Bridge<br>"));
echo '<hr/>';
var_dump(functionName($arg1 = "Robson<br>", $arg2="Kaue<br>",$arg3="Gustavo<br>"));
echo '<hr/>';
var_dump(optionArgs($arg1 = "Robson"));
echo '<hr/>';
var_dump(optionArgs($arg1 = "Robson", $arg2 = "Kaue"));
echo '<hr/>';
var_dump(optionArgs($arg1 = "Robson", $arg2 = "Kaue", $arg3 = "Gustavo"));
echo '<br>';
echo '<hr/>';

$weight = 68;
$height = 1.70;

echo calcImc();
echo '<br>';
echo '<br>';
echo '<hr/>';

$pay = paytotal($price = 200);
$pay = paytotal($price = 350);
echo $pay;
echo '<br>';
echo '<br>';
echo '<hr/>';

var_dump(mytem("Kaue","Gustavo","Gah","João"));
?>