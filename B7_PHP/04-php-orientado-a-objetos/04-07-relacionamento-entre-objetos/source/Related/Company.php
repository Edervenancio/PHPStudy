<?php

namespace Source\Related;

class Company
{

private $company;

/*/
  * @var address
 */

 // Var do tipo Address, criando um relacionamento entre objetos.

private $address;
private $team;
private $products;
// 4 propriedades privadas, necessario metodos para alteralas


public function bootcompany($company, $address)
{
    $this->company = $company;
    $this->address = $address;
}



// Usando o método $company (upinside) e trazendo o método Address $address (só aceita um objeto da classe)
// Address
public function boot($company, Address $address)
{
    $this->company = $company;
    $this->address = $address;
}

// Compondo um objeto que tem um construtor
public function addTeamMember($job, $firstName, $lastName)
{
    $this->team[] = new User($job, $firstName, $lastName);
}

// Para que possa usar o método, tem que mandar um objeto product para dentro
public function addProduct(Product $product)
{
    $this->products[] = $product;
    // o Array products recebe o valor de product
}

public function getProducts()
{

return $this->products;

}

/**
 * Get the value of team
 */ 


public function getTeam()
{

return $this->team;

}

/**
 * Get the value of address
 */ 



 // O retorno obtido através desse método é um objeto Address
public function getAddress(): Address
{
return $this->address;
}

/**
 * Get the value of company
 */ 


public function getCompany()
{

return $this->company;

}



}