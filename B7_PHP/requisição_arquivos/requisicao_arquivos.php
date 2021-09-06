<?php

//include "file.php";
//echo "<p>Continue</p>";

// REQUIRE
//require "file.php";
//echo "<p>Continue</p>";

// include "file.php";
include __DIR__ . "/file.php";


$profile = new StdClass();
$profile-> name = "Eder";
$profile-> company = "Upinside";
$profile-> email = "dsadsa@gmail.com";

include __DIR__ . "/profile.php";

$profile = new StdClass();
$profile-> name = "Ademauri";
$profile-> company = "Upinside";
$profile-> email = "ds@gmail.com";

include __DIR__ . "/profile.php";

require __DIR__ . "/config.php";
require once __DIR__ . "/config.php";
echo "<h1>" . COURSE . "</h1>";
var_dump(require __DIR__ "/profile.php");

?>