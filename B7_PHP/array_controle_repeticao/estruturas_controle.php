<?php

$test = true;

if($test){
  var_dump (true);
}else{
 var_dump(false);
}

$age = 52;

if($age < 20){ 
    var_dump("bandas coloridas");
} elseif ($age > 20 && $age < 50){
    var_dump("otimas bandas");
} else {
  var_dump("rock and roll mais");
};


$hour = 24;

if($hour >= 5 && $hour < 23){
  if ($hour < 7){
      var_dump("Bob Marley");
  }
 else {
  var_dump("After Bridge");
}} else {
    var_dump(("ZzZzZzZzZ"));
}
echo '<br>';
echo '<br>';

$rock = "";

if(!isset($rock)){
    var_dump("Rock and roll!!!");
} else {
    var_dump("DIE");
}

$rockandroll = "";

if(empty($rockandroll)){
    var_dump("ROCK EXISTE E TOCA {$rockandroll}");
} else {
    var_dump("Não existe ou não está tocando {$rockandroll}");
}

$payment = "past_due";
switch($payment){
    case "billet_printed": var_dump("Boleto impresso"); break;
    case "canceled": var_dump("Pagamento cancelado")  ;  break;
    case "past_due": case "pending" : var_dump("Pagamento pendente"); break;
    case "aproved" : var_dump("Pagamento aprovado");     ; break;
    case "completed": var_dump("Pagamento completo")  ; break;
    default: var_dump("ERRO AO PROCESSAR PAGAMENTO")  ; break;
}


?>