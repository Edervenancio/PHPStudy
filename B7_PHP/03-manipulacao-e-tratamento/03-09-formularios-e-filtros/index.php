<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.09 - Formuários e filtros");

/*
  [ request ] $_REQUEST
 https://php.net/manual/pt_BR/book.filter.php
 */
//fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = "Um nome";
$form->mail = "Um@email.com";
// atribuindo valores ao objeto $form

echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$form->method = "get";
$form->method = "post";
//metodo get, funciona na URL.
//metodo post, fica salvo no navegador.
include __DIR__ . "/form.php";
// incluindo o arquivo form



echo "<pre>";
var_dump($_POST);
echo "</pre>";

// filtrando o input - input-Post > usuario postando para mim, campo, o filter default n faz nada por causa da sintaxe 
$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
// quando há só um campo, trabalhando campo por campo, nesse caso, o name

// quando há mais de um campo, tem que trabalhar com todos os dados
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

echo "<pre>";
var_dump([$post, $postArray]);
echo "</pre>";

if ($postArray) {
    if (in_array("", $postArray)) {
        echo "<p class='trigger warning'>Preencha todos os campos!</p>";
        // se negação de filter var verificando a validade dos campos com filtervar e validate email
    } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail informado não é válido!</p>";
    } else {
        // array_map é uma função como call_user_function, onde pega cada indice do array e executa um callback, retorna a função
        // strip_tags remove os scripts da página, nesse caso, no input <script> <?php
        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $saveStrip);
        // trim retira os espaços vazios
        var_dump($save);
        echo "<p class='trigger accept'>Cadastro com sucesso!</p>";
    };
};

$form->method = "post";
include __DIR__ . "/form.php";

/*
  [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
//fullStackPHPClassSession("post", __LINE__);


/*
  [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
//fullStackPHPClassSession("get", __LINE__);

echo '<br>';
echo '<hr>';
 
echo "<pre>";
var_dump($_GET);
echo "</pre>";

$get = filter_input(INPUT_GET, "mail", FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);


echo "<pre>";
var_dump($getArray);
echo "</pre>";



$form->method= "get";
include __DIR__ . "/form.php";

/*
  [ filters ] list | id | var[_array] | input[_array]
  http://php.net/manual/pt_BR/filter.constants.php
 */
//fullStackPHPClassSession("filters", __LINE__);


echo '<br>';
echo '<br>';
echo '<hr/>';

echo "<pre>";
var_dump(filter_list(), filter_id("validate_email"), FILTER_VALIDATE_EMAIL, filter_id("string"), FILTER_SANITIZE_STRING);
echo "</pre>";


$filterform = [
    "name"=> FILTER_SANITIZE_STRIPPED,
    "mail"=> FILTER_VALIDATE_EMAIL
];

$getforms = filter_input_array(INPUT_GET, $filterform);
var_dump($getforms);

$email = "cursos@upinnside.com.br";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL), 
filter_var_array($getforms, $filterform));