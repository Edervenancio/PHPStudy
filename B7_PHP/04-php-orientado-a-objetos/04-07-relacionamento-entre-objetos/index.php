<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);


$company = new \Source\Related\Company();
$company->bootcompany(
    "Upinside",
    "Nome da rua"
);



echo "<pre>";
var_dump($company);
echo "</pre>";

echo '<br>';


// é impossivel isntanciar um objeto boot passando o valor de address sem ser instanciado.
/*
Exemplo:

$company->boot(
    "Upinside",
    "Rua..."
)
*/

// instanciando o objeto address
$address = new Source\Related\Address("Dr antonio Luiz moura gonzaga", 3339, "Bloco A, sala 210");
$company->boot(
    "Upinside",
    $address
);

echo "<pre>";
var_dump($company);
echo "</pre>";


// Obtendo o valor através do getcompany, através do getaddress e especificando através do getstreet
echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";

echo "<p>{$company->getAddress()->getNumber()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

// Diferente da associação, não temos uma propriedade vinculada.
// Temos como garantir também o objeto de entrada através da solicitação do método

$fsphp = new Source\Related\Product("Full stack php", 1997);
$laradev = new source\Related\Product("Laravel Developer", 997);

echo "<pre>";
var_dump($fsphp, $laradev);
echo "</pre>";

$company->addProduct($fsphp);
$company->addProduct($laradev);
$company->addProduct(new source\Related\Product("New control Dev", 2997));

echo "<pre>";
var_dump($company);
echo "</pre>";

/** 
* @var \Source\Related\Product $products
*/


// Lendo os valores de product 

foreach($company->getProducts() as $product){
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}


/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */

 // Um objeto que constrói outro dentro. Não coexistem.

fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Robson", "Leite");
$company->addTeamMember("Manager", "Kaue", "Cardoso");
$company->addTeamMember("Support", "Gah", "Morandi");
$company->addTeamMember("Producer","Gustavo","Santos");
$company->addTeamMember("Designer","João","A");



/**
 * @var \Source\Related\User $member
 */



echo "<pre>";

echo "</pre>";

foreach($company->getTeam() as $member){
    echo "<p>{$member->getJob()}: {$member->getfirstname()} {$member->getlastname()}</p>";
}









