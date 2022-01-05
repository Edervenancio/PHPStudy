<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.08 - Regra de negócio e modelo");
require __DIR__ . "/../source/autoload.php";

/*
 * [ layer ] Uma classe base que implementa os métodos de persitência e serve a todos os modelos.
 * essa é uma layer supertype.
 */

 // onde vamos implementar funções que são em comum para toda nossa aplicação
fullStackPHPClassSession("layer", __LINE__);


/**
 * 
 * @abstract Model
 */
$layer = new ReflectionClass(\Source\Models\Model::class);

echo '<pre>';
var_dump($layer->getDefaultProperties(),
         $layer->getMethods());
echo '</pre>';



/*
 * [ model ] Cada rotina em um sistema tem uma regra de negócio. Um model serve para abstrair
 * essas rotinas se reponsabilizando pelas regras.
 */
fullStackPHPClassSession("model", __LINE__);

$model = new \Source\Models\UserModel();

echo '<pre>';
var_dump($model, get_class_methods($model));
echo '</pre>';