<?php


require __DIR__ . "/source/autoload.php";
require __DIR__ . '/../../../fullstackphp/fsphp.php';

use Source\Inheritance\Address;
use Source\Inheritance\Event\Event;
use Source\Inheritance\Event\Eventlive;
use Source\Inheritance\Event\EventOnline;

fullStackPHPClassName("04.08 - Herança e polimorfismo");


/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new Event(
    "Workshop Fsphp",
    new DateTime("2019 -05-20 16:00"),
    2500,
    4
);

$event->register("Robson leite", "Cursos@upinside.combr" );
$event->register("Gah Morandi", "cursos@upinside.com.br");
// Acessando o $fullname e $emailb 
$event->register("Kaue Cardoso", "cursos@upinside.com.br");
$event->register("João A", "cursos@upinside.com.br");
$event->register("Gustavo","cursos@upinside.com.br");

echo "<pre>";
var_dump($event);
echo"</pre>";

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);


$address = new Address(
    "Rua dos eventos", 24
);

$event = new Eventlive(
    "Workshop Fsphp",
    new DateTime("2019-05-20 16:00"),
    2500,
    4,
    $address
);

echo "<pre>";
var_dump($event);
echo"</pre>";

$event->register("Robson leite", "Cursos@upinside.combr" );
$event->register("Gah Morandi", "cursos@upinside.com.br");
$event->register("Kaue Cardoso", "cursos@upinside.com.br");
$event->register("João A", "cursos@upinside.com.br");
$event->register("Gustavo","cursos@upinside.com.br");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new Source\Inheritance\Event\EventOnline(
    "Workshop Fsphp",
    new DateTime("2019-05-20 16:00"),
    2500,
    "https://google.com.br"

);

echo "<pre>";
var_dump($event);
echo"</pre>";

$event->register("Robson leite", "Cursos@upinside.combr" );
$event->register("Gah Morandi", "cursos@upinside.com.br");
$event->register("Kaue Cardoso", "cursos@upinside.com.br");
$event->register("João A", "cursos@upinside.com.br");
$event->register("Gustavo","cursos@upinside.com.br");
