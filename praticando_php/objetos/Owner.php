<?php


Class Owner {

    public $owner;
    public $ownerEmail;
    public $age;

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner)
    {
        $this->owner = $owner;

       if(mb_strlen($owner) < 2){
           $owner = "pequeno de mais";
           $this->owner = $owner;
       };

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of ownerEmail
     */ 
    public function getOwnerEmail()
    {
        return $this->ownerEmail;
    }

    /**
     * Set the value of ownerEmail
     *
     * @return  self
     */ 
    public function setOwnerEmail($ownerEmail)
    {
        

        if(!$ownerEmail = filter_var($ownerEmail, FILTER_VALIDATE_EMAIL)){

            $ownerEmail = "Email inválido";
            $this->ownerEmail = $ownerEmail;
        };

        return $this;
    }
}