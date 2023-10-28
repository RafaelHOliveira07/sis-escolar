<?php
    require_once "classes/Turma.php";
    $turma = new Turma();
    $lista = $turma->listar();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="aluno.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Novo Aluno</h3>
    <div class=container>
        <div class="box">
            <form action="alunos-gravar.php" method="POST" enctype="multipart/form-data">
                <label for="txtnome">Nome:</label>
                <input type="text" name="txtnome"><br><br>
                <label for="CPF" name="CPF">CPF:</label>
                <input type="text" name="CPF"><br><br>
                <label for="tel">Telefone:</label>
                <input type="tel" name="tel" maxlength="15" onkeyup="handlePhone(event)" /><br><br>
                <label for="selTurma">Turma:</label><br>
                <select name="selturma">
                    <?php foreach ($lista as $linha):
                        echo "<option value='{$linha['id']}'> {$linha['descTurma']} </option>";
                        endforeach
                    ?>
                </select><br><br>
                <label for="foto">Foto: </label>
                <input type="file" name="foto">
                <input type="submit" value="Salvar">
            </form>
        </div>
    </div>
</body>
</html>