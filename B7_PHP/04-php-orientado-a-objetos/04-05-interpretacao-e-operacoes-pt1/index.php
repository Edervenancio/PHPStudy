<?php

use Source\Interpretation\User;

require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new User;
// construindo um objeto, mesmo que em branco
$user = new User(
    "Robson",
    "Leite",
    "upinside@com.br"
);


echo "<pre>";
var_dump($user);
echo "</pre>";
/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);


echo '</hr>';
echo '<br>';
$robson = $user;
// copiando o objeto, a mesma coisa.
$kaue = $robson;
$kaue->setFirstname("Kaue");
$kaue->setLastname("Cardoso");

$robson->setFirstname("Robson");
$robson->setLastname("Leite");

$kaue = clone $robson;
$kaue->setFirstname("Kaue");
$kaue->setLastname("Cardoso");


$gustavo = clone $robson;

$kaue = null;
echo "<pre>";
var_dump($robson, $kaue, $gustavo);
echo "</pre>";

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);