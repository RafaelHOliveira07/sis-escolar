<?php
// Inclui o arquivo que contém a definição da classe Turma
require_once 'classes/Aluno.php';

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto Turma
$aluno = new Aluno($id);

// Chama o método "excluir" do objeto Turma
$aluno->excluir();

// Redireciona o usuário para a página "turmas-listar.php"
header('Location: aluno-listar.php');
?>