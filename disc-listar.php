<?php
    require_once "classes/Disciplina.php";
    $disciplina = new Disciplina();
    $lista = $disciplina->listar();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <?php require_once "layout/menu.php"?>
    <h3>Listar Disciplina</h3>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Disciplina</th>
            <th>Carga Horária</th>
            <th>Ações</th>
         
        </tr>
        <?php foreach ($lista as $linha):?>
        <tr>
            <td><?php echo $linha['id']?></td>
            <td><?php echo $linha['nomeDisciplina']?></td>
            <td><?php echo $linha['cargaHoraria']?></td>
            <td><a href="#">Atualizar</a>
            <a href="#">Excluir</a></td>
        </tr>
        <?php endforeach ?>
    </table>

        <a href="leitura_disciplina.php"> Carregar Arquivo</a>
        

</body>
</html>