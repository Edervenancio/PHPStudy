<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
//fullStackPHPClassSession("A classe DateTime", __LINE__);

define('DATE_BR', "d/m/Y H:i:s");
// definindo o date br e sua estrutura


$datanow = new DateTime();
// criando uma data/horário 
$dateBirth = new DateTime("1986-07-01");
// criando uma data em específico
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/03/2020");
// criando uma data com um formato e definido (mas é convertido) "DATE_BR" 12:00:00 H:i:s

echo "<pre>";
var_dump($datanow,
         $dateBirth,
         $dateStatic);
echo "</pre>";


echo "<pre>";
var_dump($datanow->format(DATE_BR),
         $datanow->format("d"));
echo "</pre>";

echo "<p>Hoje é dia {$datanow->format("d")} do {$datanow->format("m")} de {$datanow->format("Y")}</p>";

$newtimezone = new DateTimeZone("Pacific/Apia");
// pegando o timezone de apia
$newDate = new DateTime("now", $newtimezone);
// pegando o tempo atual da timezone stada
echo "<pre>";
var_dump($newtimezone, $newDate);
echo "</pre>";
/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
//fullStackPHPClassSession("A classe DateInterval", __LINE__);

echo '<br>';
echo '<hr/>';
$dateinterval = new DateInterval("P10Y2MT10M");
// Period (P) - Tempo (T) / Periodo 10 Y (YEARS - ANOS) ,  2 M (Months/Meses) ,  T (TEMPO) - 10 minutos

echo "<pre>";
var_dump($dateinterval);
echo "</pre>";

$datetime = new DateTime("now");
// $datetime->add($dateinterval);
   $datetime->sub($dateinterval);
   // adicionando e subtraindo o intervalo de tempo do datetime usando o dateinterval P 10 YEARS 2 MONTHS, 10 MINUTES
   echo "<pre>";
var_dump($datetime);
echo "</pre>";

$birth = new DateTime("2022-01-22");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);
// diferença do dia de hoje para a data de aniversário desse ano
echo '<br>';
echo '<hr/>';

echo '<pre>';
var_dump($birth, $diff);
echo '</pre>';

if($diff->invert){
   // invert = já passou, se a diferença já passou, por exemplo, ano passado.
   echo "<p> Seu aniversário foi há {$diff->days} dias</p>";
} else {
   echo "<p> Faltam {$diff->days} dias para seu aniversário</p>";
};


echo '<br>';
echo '<hr/>';
$dateResources = new DateTime("now");

echo "<pre>";
var_dump($dateResources->format(DATE_BR),
         // definindo o formato BR de dataresources 
         $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
         // substraindo 10 dias a partir do now já criado, com um formato br "d/m/Y H:i:s"
         $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR));
         // adicionando 20 dias  a partir do now com o valor empregado, com o formato br "d/m/y H:i:s, caso fosse 10, voltaria ao valor da data atual e não veriamos
         // diferença
echo "</pre>";


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php 
 */
//fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
// date time agora
$interval = new DateInterval("P1M");
// intervalo - periodo de um mês
$end = new DateTime("2022-01-01");
// fim do periodo (fim de data)
$period = new DatePeriod($start, $interval, $end);
// calculando o periodo usando os 3 parâmetros
echo "<pre>";
var_dump([$start->format(DATE_BR),
// atribuindo o formato br
         $interval,
         // intervalo
         $end->format(DATE_BR)], $period, get_class_methods($period));
         // definindo o formato br, o periodo e recebendo os métodos de classe de period
echo "</pre>";

echo "<h1>Sua assinatura: </h1>";
foreach($period as $recurrences){

   // for each transferindo o valor de period para recurrences, mostrando a hora atual, um mês após até o final do end - 03/10 --- 03/11 --- 03/12 --- 01/01
   echo "<p>Próximo vencimento: {$recurrences->format(DATE_BR)}</p>";
};