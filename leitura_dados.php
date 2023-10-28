<?php

$url = 'dados.json';
//define a url do arquivo JSON

$json = file_get_contents($url);
//obtem o conteudo do arquivo json como uma string

$data = json_decode($json,true);
//Decodifica a string json em um array associativo
//do php e o resultado é armazenado na variavel $data

foreach($data as $dado){
    echo"-------------------------------- <br>";
    echo "Nome:{$dado['nome']} <br>";
    echo "Turma:{$dado['turma']} <br>";
    echo "<h4>Disciplinas:</h4>";
    foreach($dado['disciplinas'] as $disciplina){
        echo "{$disciplina['nome']}-";
        echo "{$disciplina['professor']} <br>";
    }
}
?>