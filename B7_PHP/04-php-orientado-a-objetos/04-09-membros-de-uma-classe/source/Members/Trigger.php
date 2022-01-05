<?php

namespace SOurce\Members;

class Trigger
{

    private const TRIGGER = "trigger";

    public const  ERROR = "error";
    public const  ACCEPT = "accept";
    public const  WARNING = "warning";

    // tenho a priopriedade, mas somente a classe pode manipular
    private static $message;
    private static $errorType;
    private static $error;

    public static function show($message, $errorType = null)
    {
        // o errortype pode ser nulo, prevemos que não será passado nenhuma classe no me´todo de base
        self::setError($message, $errorType);
        echo self::$error;
    }

    public static function push($message, $errorType = null)
    {
        self::setError($message, $errorType);
        return self::$error;
        // pode ser armazenado em variaveis, nao aparece para o usuario
    }

    private static function setError($message, $errorType)
    {
        // criando a reflection para a getconstants
        $reflection = new \ReflectionClass(__CLASS__);
        // para atribuir uma classe, ela deve estar nas constantes
        $errorTypes = $reflection->getConstants();

        self::$message = $message;
        // se o valor de error type não for nulo ou em errorTypes houver o error type, pode haver uma classe que pode ser utilizada, se não, o valor é em branco
        self::$errorType = (!empty($errorType) || in_array($errorType, $errorTypes) ? " {$errorType} " : "");
        self::$error = "<p class='". self::TRIGGER. self::$errorType . "'>" . self::$message . "</p>";
        // concatenando a classe principal com o tipo de erro e a mensagem.
    }

}