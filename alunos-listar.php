<?php
    require_once "classes/Aluno.php";
    $aluno = new Aluno();
    $lista = $aluno->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <?php require_once "layout/menu.php"?>
    <h3>Listar Alunos</h3>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Turma</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $linha):?>
        <tr>
            <td><?php echo $linha['id']?></td>
            <td><?php echo $linha['nome']?></td>
            <td><?php echo $linha['turma_id']?></td>
            <td><?php echo "<img src='uploads/{$linha['foto']}' width='75'>"?></td>
            <td>
                <a href="#">Atualizar</a>
                <a href="alunos-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

    <a href="alunos-inserir.php">Novo Aluno</a>
</body>
</html>