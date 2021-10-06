<?php




for ($i = 0; $i < 25; $i++){
    $numeros[] = rand(0,100);
    arsort($numeros);
    array_splice($numeros, 2,23); 
};

echo "<pre>";
print_r($numeros);
echo "</pre>";

?>