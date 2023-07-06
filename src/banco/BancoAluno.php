<?php

require_once __DIR__ . '/Banco.php';
require_once __DIR__ . '/../classes/Aluno.php';

class BancoAluno extends Banco {

    public function criar($aluno) {
        $sql = 'INSERT INTO aluno (nome, cpf, data_nascimento, dormitorio, serie, data_entrada, data_saida) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $aluno->getNome());
        $stmt->bindValue(2, $aluno->getCpf());
        $stmt->bindValue(3, $aluno->getDataNascimento());
        $stmt->bindValue(4, $aluno->getDormitorio());
        $stmt->bindValue(5, $aluno->getSerie());
        $stmt->bindValue(6, $aluno->getDataEntrada());
        $stmt->bindValue(7, $aluno->getDataSaida());

        $stmt->execute();
    }

    public function editar($aluno) {
        $sql = 'UPDATE aluno SET nome = ?, cpf = ?, data_nascimento = ?, dormitorio = ?, serie = ?, data_entrada = ?, data_saida = ? WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $aluno->getNome());
        $stmt->bindValue(2, $aluno->getCpf());
        $stmt->bindValue(3, $aluno->getDataNascimento());
        $stmt->bindValue(4, $aluno->getDormitorio());
        $stmt->bindValue(5, $aluno->getSerie());
        $stmt->bindValue(6, $aluno->getDataEntrada());
        $stmt->bindValue(7, $aluno->getDataSaida());
        $stmt->bindValue(8, $aluno->getMatricula());

        $stmt->execute();
    }

    public function buscarPorMatricula($matricula) {
        $sql = 'SELECT * FROM aluno WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);
        $stmt->execute();
        $resultado = $stmt->fetch();
        
        $aluno = new Aluno();
        $aluno->setMatricula($resultado['matricula']);
        $aluno->setNome($resultado['nome']);
        $aluno->setCpf($resultado['cpf']);
        $aluno->setDataNascimento($resultado['data_nascimento']);
        $aluno->setDormitorio($resultado['dormitorio']);
        $aluno->setSerie($resultado['serie']);
        $aluno->setDataEntrada($resultado['data_entrada']);
        $aluno->setDataSaida($resultado['data_saida']);

        return $aluno;
    }

    public function listar() {
        $lista_alunos = [];
        $resultados = $this->pdo->query( 'SELECT * FROM aluno ORDER BY matricula' );
        while ($resultado = $resultados->fetch()) {
            $aluno = new Aluno();
            $aluno->setMatricula($resultado['matricula']);
            $aluno->setNome($resultado['nome']);
            $aluno->setCpf($resultado['cpf']);
            $aluno->setDataNascimento($resultado['data_nascimento']);
            $aluno->setDormitorio($resultado['dormitorio']);
            $aluno->setSerie($resultado['serie']);
            $aluno->setDataEntrada($resultado['data_entrada']);
            $aluno->setDataSaida($resultado['data_saida']);
            array_push($lista_alunos, $aluno);
        }
        return $lista_alunos;
    }

    public function excluir($matricula) {
        $sql = 'DELETE FROM aluno WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);

        $stmt->execute();
    }

}