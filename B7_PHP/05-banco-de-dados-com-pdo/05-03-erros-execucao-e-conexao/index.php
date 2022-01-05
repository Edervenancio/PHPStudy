<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.03 - Errors, conexão e execução");

/*
 * [ controle de erros ] http://php.net/manual/pt_BR/language.exceptions.php
 */
fullStackPHPClassSession("controle de erros", __LINE__);

/*try {
    throw new Exception("Exception");
} catch (Exception $exception){
    echo "<p class='trigger error'>{$exception->getMessage()}</p>";
}*/

// O try e catch tratam erros.
// A classe exception armazena a variavel $exception, onde podemos tratar e debuggar
// O throw new lança uma exceção manualmente e é tratado no bloco catch
// o Finally é  executado sempre ao final de cada execução

try {
    // throw new Exception("Exception");
    //throw new PDOException("PDOException");
    throw new ErrorException("ErrorException");
} catch (PDOException | ErrorException $exception) {
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
} catch (Exception $exception) {
    echo "<p class='trigger error'>{$exception->getMessage()}</p>";
} finally {
    echo "<p>Execução terminou!</p>";
}

/*
 * [ php data object ] Uma classe PDO para manipulação de banco de dados.
 * http://php.net/manual/pt_BR/class.pdo.php
 */
fullStackPHPClassSession("php data object", __LINE__);

try {
    $pdo = new PDO(
        // dsn do mysql, host, e o name do banco
        "mysql:host=localhost;dbname=fsphp",
        // nome do usuario (username)
        "root",
        // password
        "",
        // options, como o PDO vai se comportar com o banco de dados
        [
            // o padrão de passar configuração é um array
            // Garantir que o charset do PDO seja o mesmo do BD 
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]

    );

    // statement será igual a pdo, e teremos acesso a propriedade das classes
    // executando uma query dando select all from users limit 3
    
    $stmt = $pdo->query("SELECT * FROM users LIMIT 3");

    // enquanto tiver usuários no fetch, os resultados serão trazidos
    // fetch assoc torna os dados mais fáceis de se trabalhar
    while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<pre>';
        var_dump($user);
        echo '</pre>';
    }

} catch (PDOException $exception) {
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}

/*
 * [ conexão com singleton ] Conextar e obter um objeto PDO garantindo instância única.
 * http://br.phptherightway.com/pages/Design-Patterns.html
 */
fullStackPHPClassSession("conexão com singleton", __LINE__);

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

$pdo1 = Connect::getInstance();
$pdo2 = Connect::getInstance();

echo '<pre>';
var_dump($pdo1, 
         $pdo2,
         Connect::getInstance(),
         COnnect::getInstance()::getAvailableDrivers(),
         Connect::getInstance()->getAttribute(PDO::ATTR_DRIVER_NAME));
echo '</pre>';