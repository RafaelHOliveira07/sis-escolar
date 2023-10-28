<?php
    require_once 'usuario-verifica.php';
?>

<?php
    // Inclui o arquivo que contém a definição da classe Turma
    require_once "classes/Turma.php";

    // Obtém o valor do parâmetro "id" passado na URL via método GET
    $id = $_GET['id'];

    // Cria um novo objeto da classe Turma passando o valor de $id como parâmetro
    $turma = new Turma($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Editar Turma</h3>
    <form action="turmas-editar-gravar.php" method="POST">
        <input type="hidden" name="id" value="<?= $turma->id ?>">
        <label for="descTurma">Turma:</label>
        <input type="text" name="descTurma" value="<?= $turma->descTurma ?>">
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" name="ano" value="<?= $turma->ano ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>