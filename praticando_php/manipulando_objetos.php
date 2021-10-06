<?php


$people = ["Nome"=>"Fulano",
            "Sobrenome"=>"Ciclano",
            "Emprego"=>"Desenvolvedor"];

            $people = (object)$people;


            echo "<pre>";
            var_dump($people);
            echo "</pre>";

            $people->Emprego = "Desenvolvedor PHP";

            echo '<br>';
            echo '<hr/>';

            echo "<pre>";
            var_dump($people);
            echo "</pre>";

            unset($people->Sobrenome);

            echo "<pre>";
            var_dump($people);
            echo "</pre>";

            echo '<br>';
            echo '<hr/>';
            
            $people->idade = new stdClass();
            $people->idade = 21;

            echo "<pre>";
            var_dump($people);
            echo "</pre>";



            $perfil = <<<PFL
            <article>
            <h1>{Nome}</h1>
            <h2>{Emprego}</h2>
            <p>E somente com {idade} anos!</p>
            </article>
            PFL;

            echo str_replace(
                array_keys($people), array_values($people), $perfil
            );
?>