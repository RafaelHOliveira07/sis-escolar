<?php
    class Aluno {
        public $id;
        public $nome;
        public $turma_id;
        public $foto;
        public $CPF;
        public $tel;

        public function __construct($id = false){
            if($id){
                $this->id = $id;
                $this->carregar();
            }
        }

        public function inserir(){
            $sql = "INSERT INTO tb_alunos (nome, turma_id,  foto, CPF, tel) VALUES ('{$this->nome}', '{$this->turma_id}', '{$this->foto}' ,'{$this->CPF}', '{$this->tel}')";
            include_once "classes/conexao.php";
            $conexao->exec($sql);
            echo "Registro gravado com sucesso!";
        }

        public function listar(){
            $sql = "SELECT * FROM tb_alunos";
            include_once "classes/conexao.php";
            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        public function excluir()
        {
            // Define a string de consulta SQL para deletar um registro
            // da tabela "tb_turmas" com base no seu ID
            $sql = "DELETE FROM tb_alunos WHERE id=".$this->id;
    
            // Cria uma nova conexão PDO com o banco de dados "sis-escolar" localizado
            // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
    
            // Executa a instrução SQL de exclusão utilizando o método
            // "exec" do objeto de conexão PDO criado acima
            $conexao->exec($sql);
        }
    
        public function carregar()
        {
            // Query SQL para buscar uma turma no banco de dados pelo id
            $sql = "SELECT * FROM tb_alunos WHERE id=" . $this->id;
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
    
            // Execução da query e armazenamento do resultado em uma variável
            $resultado = $conexao->query($sql);
            // Recuperação da primeira linha do resultado como um array associativo
            $linha = $resultado->fetch();
    
            // Atribuição dos valores dos campos da turma recuperados do banco às propriedades do objeto
            $this->nome = $linha['nome'];
            $this->turma = $linha['turma_id'];
           
        }
    
        public function atualizar()
        {
            // Query SQL para atualizar uma turma no banco de dados pelo id
            $sql = "UPDATE tb_turmas SET 
                        descTurma = '$this->descTurma' ,
                        ano = '$this->ano'                   
                    WHERE id = $this->id ";
    
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $conexao->exec($sql);
        }
    }
?>