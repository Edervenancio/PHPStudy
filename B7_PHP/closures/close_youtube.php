<?php

// Closure
/*
$name = 'Rafael';

$closure = function() use ($name){
    echo "$name";
};

$closure(); */

/* $closure = function(){
    //echo 'Olá';
    //$ola = 'ola';
    
    return function() use ($ola) {
        echo $ola . ' mundo!';
    };
};

$a = $closure();
$a(); */

$closure = function(){
    echo '123';
};

call_user_func($closure)



?>