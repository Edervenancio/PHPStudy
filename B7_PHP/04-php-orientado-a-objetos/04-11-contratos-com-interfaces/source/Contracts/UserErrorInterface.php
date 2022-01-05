<?php

namespace Source\Contracts;

interface UserErrorInterface 
{

    // podemos separar as interfaces em blocos abstraidos e usa-los em cadeia na nossa classe.

    public function setError($error);

    public function getError($error);

}