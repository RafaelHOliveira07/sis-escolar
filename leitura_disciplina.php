<?php
require_once "classes/Disciplina.php";

$url = 'dados_disciplina.json';
//define a url do arquivo JSON

$json = file_get_contents($url);
//obtem o conteudo do arquivo json como uma string

$data = json_decode($json,true);
//Decodifica a string json em um array associativo
//do php e o resultado é armazenado na variavel $data

foreach($data as $dado){
    $disciplina = new Disciplina();
    
    $disciplina->nomeDisciplina = $dado['nome'];
    $disciplina->cargaHoraria = $dado['carga'];
    $disciplina->inserir();
}
?>