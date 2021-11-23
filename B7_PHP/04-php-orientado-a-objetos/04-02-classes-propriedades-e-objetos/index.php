<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 */
fullStackPHPClassSession("classe e objeto", __LINE__);
require __DIR__ . "/classes/User.php";
// instanciando um novo objeto
$user = new User();

echo "<pre>";
var_dump($user);
echo "</pre>";

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);
/// atruibindo valores ao objeto $user
$user->Firstname = "Eder";
$user->Lastname = "Venâncio";
$user->Email = "adada@gmail.com";

echo "<pre>";
var_dump($user);
echo "</pre>";
// transmitindo os valores do objeto
echo "<p>O email de {$user->Firstname} é {$user->Email}</p>";
/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);
echo '<br>';
echo '</hr>';
$user->setFirstname = "Eder";
$user->setLastname = "Venâncio";
$user->setEmail = "cursos";


if(!$user->setEmail("cursos")){
    echo "<p>O Email {$user->getEmail()} não é válido!</p>";
};

echo "<pre>";
var_dump($user);
echo "</pre>";


