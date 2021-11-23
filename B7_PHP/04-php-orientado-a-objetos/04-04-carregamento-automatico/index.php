<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


 


use Source\Loading\Address;
use Source\Loading\Company;
use Source\Loading\User;



require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");

/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

//require __DIR__ . "/source/Loading/Address.php";
// require __DIR__ . "/source/Loading/Company.php";
//require __DIR__ . "/source/Loading/User.php";

require __DIR__ . "/source/autoload.php";

$user = new User();
$address = new Address();
$company = new Company();

echo "<pre>";
var_dump($user, $address, $company);
echo "</pre>";

echo '</hr>';
echo '<br>';




/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);


require __DIR__ . "/source/vendor/autoload.php";

$email = new \PHPMailer\PHPMailer\PHPMailer();



echo "<pre>";
var_dump($email);
echo "</pre>";