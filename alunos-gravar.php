<?php
    require_once "classes/Aluno.php";

    $aluno = new Aluno();

    $aluno->nome = $_POST['txtnome'];
    $aluno->turma_id = $_POST['selturma'];

    if(isset($_FILES['foto']['name']) && $_FILES["foto"]["error"] == 0){

        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        $nomeImagem = $_FILES['foto']['name'];
        $extensao = strrchr($nomeImagem,'.');
        $extensao = strtolower($extensao);

        if(strrchr('.jpg;.jpeg;.gif;.png', $extensao)){

            $novoNome = md5(microtime() .$extensao);

            $destino = 'uploads/' .$novoNome;

            @move_uploaded_file ($arquivo_tmp, $destino);

            $aluno->foto = $novoNome;
        }
    }

    $aluno->inserir();
?>