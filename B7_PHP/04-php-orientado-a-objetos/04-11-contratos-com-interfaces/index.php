<?php


require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.11 - Contratos com interfaces");

require __DIR__ . "/source/autoload.php";

// Uma interface é um contrato que fazemos com a classe e o objeto para que possamos ter compatiblidade e abstrair


/*
 * [ implementacão ] Um contrato de quais métodos a classe deve implementar
 * http://php.net/manual/pt_BR/language.oop5.interfaces.php
 */
fullStackPHPClassSession("implementacão", __LINE__);

$user = new \Source\Contracts\User(
    "Gustavo",
    "Web",
    "Cursos@upinside.com.br"
);

echo '<pre>';
var_dump($user);
echo '</pre>';


$admin = new Source\Contracts\UserAdmin(
    "Robson",
    "Leite",
    "cursos@upinside.com.br"
);

echo '<pre>';
var_dump($user, $admin);
echo '</pre>';

/*
 * [ associação ] Um exemplo associando ao login
 */
fullStackPHPClassSession("associação", __LINE__);


$login = new Source\Contracts\Login();

$loginUser = $login->loginUser($user);
$loginADMIN = $login->loginAdmin($admin);


echo '<pre>';
var_dump($loginUser, $loginADMIN);
echo '</pre>';

/*
 * [ dependência ] Dependency Injection ou DI, é um contrato de relação entre objetos, onde
 * um método assina seus atributos com uma interface.
 */
fullStackPHPClassSession("dependência", __LINE__);

echo '<pre>';
var_dump(
    $login->login($user),
    $login->login($user)->getLastName(),
    $login->login($admin),
    $login->login($admin)->getLastName());
echo '</pre>';




