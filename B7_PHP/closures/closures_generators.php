<?php


$myage = function($year){
    $age = date("Y") - $year;
    return "<p> Você tem {$age} anos</p>";
};

echo $myage(2004);

$pricebrl = function($price){
  return number_format($price, decimals:2, decimal_separator:",", thousands_separator:",");
};

echo "<p>Projeto custa R$ {$pricebrl(price: 3600)}. Vamos fechar?</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] - $qtd * $price;
    $myCart["totalPrice"] += $myCart [$item];
};

$cartAdd("HTML5", 1, 457);
$cartAdd("Jquery", 2 , 497);

var_dump($myCart);
echo '<br>';
echo '<br>';
var_dump($cartAdd);

$iterator = 10;

function showDates($days){
    $saveDate = [];
    for($day = 1; $day < $days; $day++){
    $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
}
return $saveDate;

echo "<div style='text-align:center'>";
foreach (showDates[$iterator] as $date){
    echo "<small class'tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>"

?>