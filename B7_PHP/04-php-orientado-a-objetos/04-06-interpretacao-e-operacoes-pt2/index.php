<?php

use Source\Interpretation\Product;

require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.06 - Interpretação e operações pt2");

require __DIR__ . "/source/autoload.php";

/*
 * [ set ] Executado altomaticamente quando se tenta criar uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.set
 *
 * inacessível = propridade é privada ou não existe
 */
fullStackPHPClassSession("__set", __LINE__);

$fsphp = new Product();

$fsphp->handler(
    "Fsphp Developer",
    1997
);

// manipulando o fsphp com a função handller

$fsphp->name = "Fsphp";
$fsphp->title = "Fsphp";
$fsphp->value = 1997;
// $fsphp->price = 1997;
// manipulando propriedades que não existem e privadas

echo "<pre>";
var_dump($fsphp);
echo "</pre>";

/*
 * [ get ] Executado automaticamente quando se tenta obter uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.get
 *
 */
fullStackPHPClassSession("__get", __LINE__);

$fsphp->title = "Fsphp";
$fsphp->company = "Upinside";

// trabalhando com propriedades que não existem
echo "<p>O curso {$fsphp->title} da {$fsphp->company} é o melhor curso de PHP do mercado!</p>";
// a set retorna propriedades que não existem, mas o get consegue acessar.

/*
 * [ isset ] Executada automaticamente quando um teste ISSET ou EMPTY é executado em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.isset
 */
fullStackPHPClassSession("__isset", __LINE__);


isset($fsphp->telefone);
// vericanhdo a existência de propriedades
isset($fsphp->name);
empty($fsphp->address);

echo "<pre>";
var_dump(isset($fsphp->telefone));
echo "</pre>";


/*
 * [ call ] Executada automaticamente quando se tenta usar um método inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.call
 *
 */
fullStackPHPClassSession("__call", __LINE__);


$fsphp->notFound("Ooops", "teste");
// a notfound não pode ser executada fora da classe, portanto, deve ser private
$fsphp->setPrice(1997, 10);
/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__toString", __LINE__);


echo $fsphp;

/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__unset", __LINE__);

unset(
    $fsphp->name,
    $fsphp->price,
    $fsphp->data,
    $fsphp->title
);

// nao pode acessar métodos privados
