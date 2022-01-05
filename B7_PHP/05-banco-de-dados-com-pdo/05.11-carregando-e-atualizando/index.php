<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.11 - Carregando e atualizando");

require __DIR__ . "/../source/autoload.php";

/*
 * [ save update ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save update", __LINE__);





$model = new \Source\Models\UserModel;



// é necessario salvar os dados, não somente informar, os dados não persistem.

$user = $model->load(4);
$user->last_name = "Silva";

if($user != $model->load(4)){
    // se for diferente, salva
    $user->save();
    echo "<p>Atualizado</p>";
} else {
    // se for igual, echo
    echo "<p>Já atualiazdo</p>";
}


echo '<pre>';
var_dump($user);
echo '</pre>';


