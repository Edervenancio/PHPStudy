<?php

class User
{   
    //criando classes
    public $Firstname;
    public $Lastname;
    public $Email;

    // função pública
    public function getFirstname()
    {
        // método para obter um nome, $this = este objeto
        // retornando
        return $this->firsttname; 
    }

    public function setFirstname($Firstname)
    {
    //método para manipular o firstname, necessário um parâmetro.
    // $this = esse objeto
    // tratando a informação com o filter var
    $this->Firstname = filter_var($Firstname, FILTER_SANITIZE_STRIPPED);

    }

    

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
         else {
            return false;
         }
    }

    /**
     * Get the value of Lastname
     */ 
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @return  self
     */ 
    public function setLastname($Lastname)
    {
        $this->Lastname = filter_var($Lastname, FILTER_SANITIZE_STRIPPED);

        return $this;
    }
}