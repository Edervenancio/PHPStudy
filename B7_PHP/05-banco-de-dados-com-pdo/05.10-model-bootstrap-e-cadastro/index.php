<?php

use Source\Models\UserModel;

require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.10 - Model bootstrap e cadastro");

require __DIR__ . "/../source/autoload.php";

/*
 * [ bootstrap ] Inicialização de dados
 */
fullStackPHPClassSession("bootstrap", __LINE__);

// o model bootstrap nada mais é do que um método que vai nos ajudar a criar um novo registro, a implementar campos que são obrigatorios, devem ser informados

$model = new UserModel();


$user = $model->bootstrap(
    "Robson",
    "Leite",
    "s@upinside.com.br",
    31231241421
);



echo '<pre>';
var_dump($user);
echo '</pre>';
/*
 * [ save create ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save create", __LINE__);

// o id e outras propriedades não podem ser manipuladas pelo objeto

// a aplicação nao pode transformar o email em null

// caso usuario nao existe, caso contrario, existe


if(!$model->find($user->email)){
    echo "<p>Cadastro</p>";
    $user->save();
} else {
    echo "Read";
    $user = $model->find($user->email);
}

echo '<pre>';
var_dump($user);
echo '</pre>';
