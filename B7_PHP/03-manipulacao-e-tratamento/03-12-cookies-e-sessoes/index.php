<?php

require __DIR__ . "/fsphp.php";
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

// definindo o cookie com o nome, valor, tempo que vai expirar
setcookie("FSPHP", "Esse é meu cookie!", time() + 30);
//setcookie("FSPHP", null, time() - 30);
echo "<pre>";
$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_STRIPPED);
var_dump($_COOKIE, $cookie);
echo "</pre>";

$time = time() + 60 * 60 * 24 * 7;

$user = [
    "user"=> "root",
    "passwd"=>"12345",
    "expire"=>$time
];

setcookie("fslogin", http_build_query($user), $time, "/", "www.localhost", true);

$login = filter_input(INPUT_COOKIE, "fslogin", FILTER_SANITIZE_STRIPPED);

if($login){
    var_dump($login);
    parse_str($login, $user);
    var_dump($user);
};

/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

echo "<br>";
echo "</hr>";


session_save_path(__DIR__ . "./ses");
session_name("FSHPHPSESID");
session_start([
    "cookie_lifetime"=> (60*60*24),
]);

echo "<pre>";
var_dump($_SESSION,[
    "id"=>session_id(),
    "name"=>session_name(),
    "session_status"=>session_status(),
    "save_path"=>session_save_path(),
    "cookie"=>session_get_cookie_params()
]);
echo "</pre>";

echo '<br>';
echo '</hr>';

$_SESSION['login'] = (object)$user;
$_SESSION['user'] = $user;
session_destroy();
unset($_SESSION['user']);

var_dump($_SESSION);