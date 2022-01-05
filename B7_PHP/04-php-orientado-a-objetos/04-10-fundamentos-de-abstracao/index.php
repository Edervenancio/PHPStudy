<?php

use Source\Bank\AccountCurrency;
use Source\Bank\AccountSaving;

require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.10 - Fundamentos da abstração");

require __DIR__ . "/source/autoload.php";


// abstração é pegar as rotinas e encapsular em um componente. Com responsabilidade clara 


/*
 * [ superclass ] É uma classe criada como modelo e regra para ser herdada por outras classes,
 * mas nunca para ser instanciada por um objeto.
 */
fullStackPHPClassSession("superclass", __LINE__);


$client = new \Source\App\User(
    "Robson",
    "Leite"
);
/*
$account = new Source\Bank\Account(
    "1600",
    "22345",
    $client,
    "1000"
);*/


echo '<pre>';
var_dump($client, 
//$account
);
echo '</pre>';

/*
 * [ especialização ] É uma classe filha que implementa a superclasse e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.a", __LINE__);

$saving = new AccountSaving(
    "1655",
    "22345",
    $client,
    3
);

echo '<pre>';
var_dump($saving);
echo '</pre>';

$saving->extract();
$saving->withdrawal(4);
$saving->deposit(1000);
$saving->extract();
/*
 * [ especialização ] É uma classe filha que implementa a superclass e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.b", __LINE__);

$current = new AccountCurrency(
    "1900",
    "22345",
    $client,
    "1000",
    "10"
);

echo '<pre>';
var_dump($current);
echo '</pre>';

$current->extract();
$current->withdraw(3000);
