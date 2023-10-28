<?php
    class Disciplina {
        public $id;
        public $nomeDisciplina;
        public $nomeProfessor;
        public $cargaHoraria;

        public function __construct($id = false){
            if($id){
                $this->id = $id;
                $this->carregar();
            }
        }

        public function inserir(){
            $sql = "INSERT INTO tb_disciplinas (nomeDisciplina,nomeProfessor, cargaHoraria) VALUES ('{$this->nomeDisciplina}','{$this->nomeProfessor}', '{$this->cargaHoraria}')";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
            $conexao->exec($sql);
            echo "Registro gravado com sucesso!";
            echo $sql;
        }

        public function listar(){
            $sql = "SELECT * FROM tb_disciplinas";
            include_once "classes/conexao.php";
            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function carregar()
        {
            $sql = "SELECT * FROM tb_disciplinas WHERE id=" . $this->id;
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $resultado = $conexao->query($sql);
            $linha = $resultado->fetch();
 
            $this->nomeDisciplina = $linha['nomeDisciplina'];
            $this->nomeProfessor = $linha['nomeProfessor'];
            $this->cargaHoraria = $linha['cargaHoraria'];
        }

    }
?>