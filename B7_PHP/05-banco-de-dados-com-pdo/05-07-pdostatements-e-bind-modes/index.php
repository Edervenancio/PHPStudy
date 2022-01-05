<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.07 - PDOStatement e bind modes");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/**
 * [ prepare ] http://php.net/manual/pt_BR/pdo.prepare.php
 */
fullStackPHPClassSession("prepared statement", __LINE__);

$search = filter_input(INPUT_GET, "f");



// comando pra preparar a instruçao
 $stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1");
 // comando para executar
 $stmt->execute();

 // caso não seja executada, o comando não é comunicado e os valores não são informados

 echo '<pre>';
 var_dump(
     $stmt,
     $stmt->rowCount(),
     $stmt->columnCount(),
     $stmt->fetch()
);
 echo '</pre>';

/*
 * [ bind value ] http://php.net/manual/pt_BR/pdostatement.bindvalue.php
 *
 */
fullStackPHPClassSession("stmt bind value", __LINE__);

// substituição de posições nas instruções por valores tratados com PDO
// :id ->informando que vai substituir os dois pontos por um valor que será tratado pela PDO

/*
$stmt = Connect::getInstance()->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindValue(":id", 50, PDO::PARAM_INT);
                 inserindo no id o valor 50 com o PDO::PARAM_INT 
$stmt->execute();

echo '<pre>';
var_dump($stmt->fetch());
echo '</pre>';
*/

// (?, ?) são numericos links anonimos, onde pode ser feito a inserção com indices em vez de nomes
$stmt = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUE (?, ?)");

// inserindo os valores na primeira e segunda interrogação
// link, conteudo, metodo de inserçao com PDO
$stmt->bindValue(1, "Gustavo", PDO::PARAM_STR);
$stmt->bindValue(2, "Web", PDO::PARAM_STR);
$stmt->execute();
echo '<pre>';
var_dump($stmt->rowCount(), Connect::getInstance()->lastInsertId());
echo '</pre>';



$stmt = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUE (:first_name, :last_name)");


$nome = "Gustavo";

$stmt->bindValue("first_name", $nome, PDO::PARAM_STR);
$stmt->bindValue("last_name", "WEB", PDO::PARAM_STR);

$stmt->execute();

echo '<pre>';
var_dump($stmt->rowCount());
echo '</pre>';


/*
 * [ bind param ] http://php.net/manual/pt_BR/pdostatement.bindparam.php
 */
fullStackPHPClassSession("stmt bind param", __LINE__);

// é necessário usar uma variável para o bindParam  

$stmt = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUE (:first_name, :last_name)");


$firstName = "Gah";
$lastName = "Morandi";

$stmt->bindParam("first_name", $firstName, PDO::PARAM_STR);
$stmt->bindParam("last_name", $lastName, PDO::PARAM_STR);
$stmt->execute();

echo '<pre>';
var_dump($stmt->rowCount());
echo '</pre>';





/*
 * [ execute ] http://php.net/manual/pt_BR/pdostatement.execute.php
 */
fullStackPHPClassSession("stmt execute array", __LINE__);


$stmt = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUE (:first_name, :last_name)");

$user = [ 
    "first_name"=>"KAUÊ",
    "last_name"=>"Cardoso"
];

$stmt->execute($user);
echo '<pre>';
var_dump($stmt->rowCount());
echo '</pre>';
/*
 * [ bind column ] http://php.net/manual/en/pdostatement.bindcolumn.php
 */
fullStackPHPClassSession("bind column", __LINE__);



$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 3");
$stmt->execute();


// é possivel trabalhar com o nome e o numero da coluna
$stmt->bindColumn("first_name", $name);
$stmt->bindColumn("email", $email);

/*
foreach($stmt->fetchAll() as $user){
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    echo "O email de {$name} é {$email}";
}*/

while($user = $stmt->fetch()){
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    echo "O email de {$name} é {$email}";
};