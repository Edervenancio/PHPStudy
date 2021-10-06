<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
//fullStackPHPClassSession("a função date", __LINE__);

echo "<pre>";
var_dump(date_default_timezone_set('America/Sao_Paulo'),
          date(DATE_W3C),
         date("d/m/Y H:i:s"));
echo "</pre>";

define("DATE_BR", "d/m/Y H:i:s");
// define("DATE_TIMEZONE", "Pacific/Apia");
define("DATE_TIMEZONE", "America/Sao_Paulo");
// CRIA A CONSTANTE COM A TIME ZONE
date_default_timezone_set(DATE_TIMEZONE);
//SETA A TIME ZONE DEFAULT
var_dump([date_default_timezone_get(),
          date(DATE_BR)]);

          echo '<br>';
          echo '<hr>';
          
          var_dump(getdate());
 

        echo "<p>" . "Hoje é dia " . getdate()["mday"] . " e são " . getdate()["hours"] . "horas" . "</p>";
// Pega o horário e a data do computador e exibe.

/**
 * [ string to date ] strtotime | strftime
 */
//fullStackPHPClassSession("string to date", __LINE__);

var_dump(["strtotime NOW"=>strtotime("NOW"),
          "time"=>time(),
          "strtotime+10d"=>strtotime( "+10days"),
          "date +10days"=>date(DATE_BR, strtotime("+10days")),
          "date -10days"=>date(DATE_BR, strtotime("-10days"))]);

          $format = "%d/%m/%Y %Hh%M minutos";
          echo "<p>" . "A data de hoje é: " . strftime($format) . "</p>";
          echo strftime( "Hoje é dia %d do %m de %Y, ás %H horas e %M minutos");
?>