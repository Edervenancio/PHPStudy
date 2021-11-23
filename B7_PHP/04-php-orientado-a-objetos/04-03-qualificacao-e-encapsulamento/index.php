<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';

fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/app/Template.php";
require __DIR__ . "/classes/web/Template.php";


// $appTemplate = new Template();
// $webTemplte =  new Template();;
// há conflito pela falta do namespace
$appTemplate = new app\Template();
$webTemplate = new web\Template();
// dizendo aonde está a classe
echo "<pre>";
var_dump($appTemplate, $webTemplate);
echo "</pre>";

// a aplicação não consegue reconhecer, falando que está declarando a mesma classe duas vezes
// os namespace refletem a arquitetura de diretório do projeto


use App\Template;
use web\Template AS webTemplate;

// não pode se usar, pois está sendo utilizado logo acima

$appUseTemplate = new Template();
$webUseTemplate = new webTemplate();

// quando se vai escrever uma classe, é necessário ao MENOS UM NAMESPACE

echo "<pre>";
var_dump($appUseTemplate, $webUseTemplate);
echo "</pre>";




/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/qualifield/User.php";
use source\qualifield\User;
$user = new \source\qualifield\User();


// $user->Firstname = "Eder";
// $user->Lastname =  "Leite";

// setando valores

//$user->setFirstname("Eder");
//$user->setLastname("Leite");





echo "<pre>";
var_dump($user, get_class_methods($user));
echo "</pre>";


echo "<p>O email de {$user->getFirstname()} é: {$user->getEmail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$eder = $user->setUser(
    "Eder",
    "Venâncio",
    "Email@aaa.com"
);

if(!$eder){
    echo "<p>Erro! {$user->getError()}</p>";
}

echo "<pre>";
var_dump($user);
echo "</pre>";

$kaue = new User();


$kaue->setUser(
    "Kaue",
    "Leite",
    "cccc@ccc.com"
);

echo "<pre>";
var_dump($kaue);
echo "</pre>";


$bia = new User();

$bia->setUser(
    "Beatriz",
    "Schevalokv",
    "bbbb@bbb.com"
);


echo "<pre>";
var_dump($bia);
echo "</pre>";