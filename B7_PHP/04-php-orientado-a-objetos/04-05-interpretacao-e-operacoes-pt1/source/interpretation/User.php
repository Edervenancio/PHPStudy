<?php

namespace Source\Interpretation;

class User
{

private $firstname;
private $lastname;
private $email;
// smepre utilizando propriedades privadas para que os métodos possam se responsabilizar pela manipulação dos mesmos


// criado apenas getters

// método executado automaticamente quando instanciado. Usando o operador new
    public function __construct($firstname, $lastname, $email = null)
    {
        // construindo a classe, onde os objetos só podem ser instanciados através desse construct 
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }


    public function __clone(){
        $this->firstname = null;
        $this->lastname = null;
        // quando clonado, automaticamente, transforma as propriedades em null para alteração

        // não se usa echo em classe, apenas usado para fins didáticos. Apenas o return. 
        echo "<p>Clonou!</p>";
    }


    public function __destruct()
    {
        var_dump($this);
        echo "<p>O objeto {$this->firstname} foi destruido!</p>";
    }
/**
 * Get the value of lastname
 */ 
public function getLastname()
{
return $this->lastname;
}

/**
 * Get the value of firstname
 */ 
public function getFirstname()
{
return $this->firstname;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}




public function setEmail($email)
{
$this->email = $email;

return $this;
}





public function setLastname($lastname)
{
$this->lastname = $lastname;

return $this;
}




public function setFirstname($firstname)
{
$this->firstname = $firstname;

return $this;
}
}