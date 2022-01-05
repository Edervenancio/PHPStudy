<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

// Os recursos são fazem parte de um objeto, portanto, não são manipuláveis através dele

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use Source\Members\Config;


$config = new Config();

// O objeto é vazio pelos recursos não serem do objeto, e sim da classe


// acessando o membro da classe através do $config::COMPANY
echo "<p>" . $config::COMPANY. "</p>";

echo "<pre>";

// acesso global e identificar quais configurações tem
// forma alternativa a criação de objeto, com acesso global

var_dump(Config::COMPANY,
        // Config::DOMAIN,
        // Config::SECTOR
    );
echo "</pre>";

echo '<pre>';
var_dump($config);
echo '</pre>';

// com a reflection, o php traz uma classe pronta para debugar
$reflection = new ReflectionClass(Config::class);

echo '<pre>';
// obtendo as constantes através da reflection
var_dump($config, $reflection->getConstants());
echo '</pre>';

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "Upinside";
Config::$domain = "Upinside.com.br";
Config::$sector = "Educação";

echo '<pre>';
// Acesso as propriedades
var_dump($config, $reflection->getProperties(), $reflection->getDefaultProperties());
echo '</pre>';

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config->setConfig("","","");
// usando o objeto, mas quando é feito a manipualação, ela acontece na classe

$config->setConfig("Upinside","Upinside.com.br","Educação");
echo '<pre>';
// nome dos metodos que quer obter e os valores atribuidos
var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());
echo '</pre>';

/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

use Source\Members\Trigger;

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

echo '<pre>';
var_dump($trigger);
echo '</pre>';

Trigger::show("Essa é uma mensagem para o usuário");
Trigger::show("Essa é uma mensagem para o usuário", TRIGGER::ACCEPT);
Trigger::show("Essa é uma mensagem para o usuário", TRIGGER::WARNING);
Trigger::show("Essa é uma mensagem para o usuário", TRIGGER::ERROR);

echo Trigger::push("Esse é um retorno para o usuário!");