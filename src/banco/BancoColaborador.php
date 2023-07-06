<?php

require_once __DIR__ . '/Banco.php';
require_once __DIR__ . '/../classes/Colaborador.php';

class Bancocolaborador extends Banco {

    public function criar($colaborador) {
        $sql = 'INSERT INTO colaborador (nome, cpf, data_nascimento, endereco) VALUES (?, ?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $colaborador->getNome());
        $stmt->bindValue(2, $colaborador->getCpf());
        $stmt->bindValue(3, $colaborador->getDataNascimento());
        $stmt->bindValue(4, $colaborador->getEndereco());

        $stmt->execute();
    }

    public function editar($colaborador) {
        $sql = 'UPDATE colaborador SET nome = ?, cpf = ?, data_nascimento = ?, endereco = ? WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $colaborador->getNome());
        $stmt->bindValue(2, $colaborador->getCpf());
        $stmt->bindValue(3, $colaborador->getDataNascimento());
        $stmt->bindValue(4, $colaborador->getEndereco());
        $stmt->bindValue(5, $colaborador->getMatricula());

        $stmt->execute();
    }

    public function listar() {
        $lista_colaboradores = [];
        $resultados = $this->pdo->query( 'SELECT * FROM colaborador ORDER BY matricula' );
        while ($resultado = $resultados->fetch()) {
            $colaborador = new colaborador();
            $colaborador->setMatricula($resultado['matricula']);
            $colaborador->setNome($resultado['nome']);
            $colaborador->setCpf($resultado['cpf']);
            $colaborador->setDataNascimento($resultado['data_nascimento']);
            $colaborador->setEndereco($resultado['endereco']);
            array_push($lista_colaboradores, $colaborador);
        }
        return $lista_colaboradores;
    }

    public function buscarPorMatricula($matricula) {
        $sql = 'SELECT * FROM colaborador WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);
        $stmt->execute();
        $resultado = $stmt->fetch();
        
        $colaborador = new Colaborador();
        $colaborador->setMatricula($resultado['matricula']);
        $colaborador->setNome($resultado['nome']);
        $colaborador->setCpf($resultado['cpf']);
        $colaborador->setDataNascimento($resultado['data_nascimento']);
        $colaborador->setEndereco($resultado['endereco']);

        return $colaborador;
    }

    public function excluir($matricula) {
        $sql = 'DELETE FROM colaborador WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);

        $stmt->execute();
    }

}