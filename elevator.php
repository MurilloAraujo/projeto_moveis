<?php

function elevator(array $peso, array $andar, int $ultimo_andar, int $maximo_pessoas, int $limite_peso): ?int
{
    $descePessoa = [];

    for ($i = 0; $i < count($peso); $i++):

        if ($peso[0] < 200):
            $descePessoa[0] = $peso[0];
        endif;

    endfor;

    var_dump($descePessoa);

    var_dump([

        "pesos" => $peso,
        "andares" => $andar,
        "ultimo_andar" => $ultimo_andar,
        "maximo_pessoas" => $maximo_pessoas,
        "limite_peso" => $limite_peso

    ]);


    return null;
}

$peso = [40, 40, 100, 80, 20];

$andar = [3, 3, 2, 2, 3];

$ultimo_andar = 3;

$maximo_pessoas = 5;

$limite_peso = 200;


elevator($peso, $andar, $ultimo_andar, $maximo_pessoas, $limite_peso);
