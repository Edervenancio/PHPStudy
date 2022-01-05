<?php

namespace Source\Members;

class Config
{



    public    const COMPANY = "Upinside";
    protected const DOMAIN = "Upinside.com.br";
    private   const SECTOR = "Educação";
    

    public static $company;
    public static $domain;
    public static $sector;

    // o static passa a fazer somente da classe, nunca do objeto
    public static function setConfig($company, $domain, $sector)
    {
        // como não é um objeto, não podemos referenciar com $this (este objeto)
        // self = (esta classe)
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }
}