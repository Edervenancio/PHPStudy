<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.09 - Métodos de busca e leitura");

require __DIR__ . "/../source/autoload.php";

/*
 * [ load ] Por primary key (id)
 */
fullStackPHPClassSession("load", __LINE__);

$model = new \Source\Models\UserModel();

$user = $model->load(1, "first_name");

// quem entra em contato com o banco de dados é sempre a model, o usermodel sempre manda o comando


// 
echo '<pre>';
var_dump($user, "{$user->first_name} {$user->last_name}");
echo '</pre>';



/*
 * [ find ] Por indexes da tabela (email)
 */
fullStackPHPClassSession("find", __LINE__);


$user = $model->find("robson1@email.com.br");
echo '<pre>';
var_dump($user, "{$user->first_name} {$user->last_name}");
echo '</pre>';

/*
 * [ all ] Retorna diversos registros
 */
fullStackPHPClassSession("all", __LINE__);

$all = $model->all(5);


/**
 * @var \Source\Models\UserModel $user
 */
foreach($all as $user){
   // $user->first_name = "Robson";
    echo '<pre>';
    var_dump($user, "{$user->first_name} {$user->last_name}");
        echo '</pre>';
}

