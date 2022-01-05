<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.05 - Explorando estilos de busca");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ fetch ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch", __LINE__);


// trazendo a classe abstraida do Connect
$connect = Connect::getInstance();
// executando o select com o query
$read = $connect->query("SELECT * FROM users limit 3");

// se read não obteve resultados
if(!$read->rowCount()){
    echo "<p>Não obteve resultados</p>";
} else {
    echo '<pre>';
    // abrir os resultados
    var_dump($read->fetch());
    echo '</pre>';

    // enquanto user for igual a read->fetch, o select continua acontecendo (limit 3)
    while($user = $read->fetch()){
        echo '<pre>';
        var_dump($user);
        echo '</pre>';
    }

    echo '<pre>';
    // Temos um bollean false, os resultados já ofram percorridos, o buffer se perdeu (libeoru a memória)
    var_dump($read->fetch());
    echo '</pre>';

}
/*
 * [ fetch all ] http://php.net/manual/pt_BR/pdostatement.fetchall.php
 */
fullStackPHPClassSession("fetch all", __LINE__);

// enquanto no fetch podemos pegar um resultado a resultado e gerar um novo looping
// no fetch all, obtemos dois resultados pulando os 3 primeiros, num só looping

// traz um array com todos os resultados em apenas um comando 
$read = $connect->query("SELECT * FROM users LIMIT 3,2");

/* while($user = $read->fetchAll()){
    echo '<pre>';
    var_dump($user);
    echo '</pre>';
} */


// para se ler um array, usamos o foreach e o buffer é zerado
foreach($read->fetchAll() as $user){
    echo '<pre>';
    var_dump($user);
    echo '</pre>';
}

/*
 * [ fetch save ] Realziar um fetch diretamente em um PDOStatement resulta em um clear no buffer da consulta. Você
 * pode armazenar esse resultado em uma variável para manipilar e exibir posteriormente.
 */
fullStackPHPClassSession("fetch save", __LINE__);

$read = $connect->query("SELECT * FROM users LIMIT 5,1");
// o valor de read é jogado para result, eliminando o buffer e entregando os resultados para uma nova camada
// a result armazena os valores e mantem, podendo repetir e nao limpando os dados originais de read
$result = $read->fetchAll();

echo '<pre>';
var_dump($read->fetchAll(),
         $result,
         $result);
echo '</pre>';

/*
 * [ fetch modes ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch styles", __LINE__);

// padrões de busca 
$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach($read->fetchAll() as $user){
    echo '<pre>';
    var_dump($user);
    echo '</pre>';
}


// trabalhando com array numerico
$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_NUM) as $user){
    echo '<pre>';
    var_dump($user, $user[1]);
    echo '</pre>';
}


// trabalhando com array associativo
$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_ASSOC) as $user){
    echo '<pre>';
    var_dump($user, $user["first_name"]);
    echo '</pre>';
}



// trabalhando com objetos
$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_CLASS, \Source\Database\Entity\UserEntity::class) as $user){
    echo '<pre>';
    /**
     * @var \Source\Database\Entity\UserEntity $user
     */
    var_dump($user, $user->getFirst_name());
    echo '</pre>';
}