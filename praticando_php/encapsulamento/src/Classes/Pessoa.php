<?php

namespace Encapsulamento\Source\Classes;

class Pessoa
{
    private $name;
    private $age;
    private $job;
    private $data;


    public function __construct($name, $age, $job)
    {
        
        $this->name = filter_var($name, FILTER_SANITIZE_STRIPPED);
        $this->age = $age;

        if(is_numeric($age)){
         $age = $age;
        } else {
           $this->age = $age = "Não é uma idade válida.";
        };

        $this->job = filter_var($job, FILTER_SANITIZE_STRIPPED);
    }

    public function __clone()
    {
        $this->name = null;
        $this->age = null;
        $this->job = null;
    }

    /*
    public function __destruct()
    {
        var_dump($this);
        
        echo "<p>O objeto {$this->name} foi destruido</p>";
    } */


    public function __get($name)
    {
    
        if(!empty($this->data[$name])){
            return $this->data[$name];
        } else {
            $this->notfound(__FUNCTION__, $name);
        }

    }

    public function __set($name, $value)
    {
        $this->notfound(__FUNCTION__, $name);
        $this->data[$name] = $value;
    }

    public function notfound($method, $name)
    {
        echo "<p>{$method}: A propriedade {$name} não existe em " . __CLASS__ . "</p>";
    }
    
}