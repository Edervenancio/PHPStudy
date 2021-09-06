<?php

$aluno = ["escola"=>"E.E Fulano", "primeiro_nome"=>"Eder", "ultimo_nome"=>"Fulano"];

echo "O aluno estuda na escola " . ($aluno['escola']) . " seu nome é " . ($aluno['primeiro_nome']);
echo '<br>';
$aluno[] = "Idade";
$aluno ["Idade"] = 17;
var_dump($aluno);
echo '<br>';
echo '<br>';
echo "O aluno estuda na escola " . ($aluno['escola']) . " seu nome é " . ($aluno['primeiro_nome']) . " e sua idade " . ($aluno["Idade"]);




?>