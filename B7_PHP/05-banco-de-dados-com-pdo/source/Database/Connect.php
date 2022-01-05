<?php

namespace Source\Database;



use \PDO;
// é necessário usar a PDO e PDOEXCeption pra trabalhar com exceções e PDO 
use \PDOException;

class Connect
{
private const HOST = "localhost";
private const USER = "root";
private const DBNAME = "fsphp";
private const PASSWORD = "";

private const OPTIONS = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    // Dizendo que todo erro que acontecer, será um PDO:ERRMODE_EXCEPTION, em vez de lançar um alerta, sempre que ocorrer um erro, vai ter uma exceção
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // Ele vem com um array tanto associativo quanto numérico, convertendo em um objeto
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_OBJ,
    // o CASE Natural garante que use o mesmo nome de coluna no banco de dados, para que possa tratar na aplicacao
    PDO::ATTR_CASE => PDO::CASE_NATURAL
];

// vai arrmazenar o objeto PDO
private static $instance;


/**
 * @return PDO
 */ 
public static function getInstance(): PDO
{
        // se a instance estiver vazia
    if(empty(self::$instance)){
        // tente
        try{
            self::$instance = new PDO(
                "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                self::USER,
                self::PASSWORD,
                self::OPTIONS
            );
        } catch(PDOException $exception) {
            die("<h1>Whoops! Erro ao conectar...</h1>");
        }
    }

    return self::$instance;

}


final public function __construct()
{
    
}

final public function __clone()
{
    
}

}