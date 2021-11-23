<?php

namespace source\qualifield;

class User
{   
    //criando classes
    private $Firstname;
    private $Lastname;
    private $Email;

    private $Error;

    public function setUser($Firstname, $Lastname, $Email){
        $this->setFirstname($Firstname);
        $this->setLastname($Lastname);

        if(!$this->setEmail($Email)){
            $this->Error = "O email {$this->getEmail()} não é valido! ";
            return false;
        }

        return true;
    }
    
    

    // função pública
    public function getFirstname()
    {
        // método para obter um nome, $this = este objeto
        // retornando
        return $this->firstname; 
    }

    private function setFirstname($Firstname)
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
    private function setEmail($Email)
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

    private function setLastname($Lastname)
    {
        $this->Lastname = filter_var($Lastname, FILTER_SANITIZE_STRIPPED);

        return $this;
    }

    /**
     * Get the value of Error
     */ 
    public function getError()
    {
        return $this->Error;
    }
}