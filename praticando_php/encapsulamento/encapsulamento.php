<?php

require __DIR__ . "/vendor/autoload.php";
use Encapsulamento\Source\Classes\Pessoa;


/* 
$pessoa->name = "Eder";
$pessoa->age = "17";
$pessoa->job = "Student"; */

$pessoa = new Pessoa(
    "Eder",
    17,
    "Estudante"
);

$another = clone $pessoa;
$another = new Pessoa(
    "Fulano",
    20,
    "Desenvolvedor"
);




echo "<pre>";
var_dump($pessoa, $another);
echo "</pre>";

echo '<hr/>';
echo '<br>';

$another->company = "Lanchonete";

echo "{$another->company}";

