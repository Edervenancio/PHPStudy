<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.04 - Consultas com query e exec");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ insert ] Cadastrar dados.
 * https://mariadb.com/kb/en/library/insert/
 *
 * [ PDO exec ] http://php.net/manual/pt_BR/pdo.exec.php
 * [ PDO query ]http://php.net/manual/pt_BR/pdo.query.php
 */
fullStackPHPClassSession("insert", __LINE__);


// variavel onde armazena o comando de inserção no BD
$insert = "   INSERT INTO users (first_name, last_name, email, document) VALUES 
('Robson','Leite','Cursos@upinside.com.br','1234567');";

try {
    // Pegando o exec e passando a instrução insert
    // O exec só retorna 1 ou 0, cadastro ou não.. deletei ou não.. um update é true or false.. ideal pra consulta de manipulação
    // para obtenção de dados, usamos o query, por causa de rowcount, e outros recursos
    // o Exec é um comando rapido, simples, que usa o menos de recurso possiveis 

    // $exec = Connect::getInstance()->exec($insert);
    echo '<pre>';
   // var_dump(Connect::getInstance()->lastInsertId());
    echo '</pre>';
    // Com null, o registro para de entarr
$exec = null;
// Query executa o comando de insert, e é possivel puxar varios metodos atrvés do ->
$query = Connect::getInstance()->query($insert);
echo '<pre>';
var_dump(Connect::getInstance()->lastInsertId());
echo '</pre>';

    echo '<pre>';
    // Error info informa os erros e suas caracteristicas 
    var_dump($exec, $query->errorInfo());
    echo '</pre>';
} catch (PDOException $exception){
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}

/*
 * [ select ] Ler/Consultar dados.
 * https://mariadb.com/kb/en/library/select/
 */
fullStackPHPClassSession("select", __LINE__);

try {
    $query = Connect::getInstance()->query("SELECT * FROM users LIMIT 2;");
    echo '<pre>';
    // contando a quantidade de colunas
    var_dump($query->rowCount(),
             $query,
             $query->fetchAll());
    echo '</pre>';
} catch (PDOException $exception){
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}

/*
 * [ update ] Atualizar dados.
 * https://mariadb.com/kb/en/library/update/
 */
fullStackPHPClassSession("update", __LINE__);

try {
    $exec = Connect::getInstance()->exec("UPDATE users SET first_name = 'KAUE', last_name = 'Cardoso' 
                                           WHERE id='53'
                                           ");

                                           echo '<pre>';
                                           var_dump($exec);
                                           echo '</pre>';
} catch (PDOException $exception){
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}

/*
 * [ delete ] Deletar dados.
 * https://mariadb.com/kb/en/library/delete/
 */
fullStackPHPClassSession("delete", __LINE__);

try {
    $exec = Connect::getInstance()->exec("DELETE FROM users WHERE id > 50");
    echo '<pre>';
    var_dump($exec);
    echo '</pre>';
} catch(PDOException $exception){
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}