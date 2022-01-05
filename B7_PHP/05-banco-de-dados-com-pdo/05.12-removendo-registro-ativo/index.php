<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.12 - Removendo registro ativo");

require __DIR__ . "/../source/autoload.php";

/*
 * [ destroy ] Deleta um registro ativo
 */
fullStackPHPClassSession("destroy", __LINE__);

$model = new \Source\Models\UserModel();

$user = $model->load(4);
$user->destroy();
echo '<pre>';
var_dump($user);
echo '</pre>';


/*
 * [ model destroy ] Deletar em cadeia
 */
fullStackPHPClassSession("model destroy", __LINE__);

$list = $model->all(100, 40);

if($list){
    /** @var \Source\Models\UserModel $user */
    foreach($list as $user){
        echo '<pre>';
        var_dump($user);
        echo '</pre>';
        $user->destroy();
    }
}
