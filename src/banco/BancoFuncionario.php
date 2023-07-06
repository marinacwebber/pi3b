<?php

require_once __DIR__ . '/Banco.php';
require_once __DIR__ . '/../classes/Funcionario.php';

class BancoFuncionario extends Banco {

    public function criar($funcionario) {
        $sql = 'INSERT INTO funcionario (nome, cpf, data_nascimento, funcao, salario, data_admissao, data_demissao) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $funcionario->getNome());
        $stmt->bindValue(2, $funcionario->getCpf());
        $stmt->bindValue(3, $funcionario->getDataNascimento());
        $stmt->bindValue(4, $funcionario->getFuncao());
        $stmt->bindValue(5, $funcionario->getSalario());
        $stmt->bindValue(6, $funcionario->getDataAdmissao());
        $stmt->bindValue(7, $funcionario->getDataDemissao());

        $stmt->execute();
    }

    public function editar($funcionario) {
        $sql = 'UPDATE funcionario SET nome = ?, cpf = ?, data_nascimento = ?, funcao = ?, salario = ?, data_admissao = ?, data_demissao = ? WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $funcionario->getNome());
        $stmt->bindValue(2, $funcionario->getCpf());
        $stmt->bindValue(3, $funcionario->getDataNascimento());
        $stmt->bindValue(4, $funcionario->getFuncao());
        $stmt->bindValue(5, $funcionario->getSalario());
        $stmt->bindValue(6, $funcionario->getDataAdmissao());
        $stmt->bindValue(7, $funcionario->getDataDemissao());
        $stmt->bindValue(8, $funcionario->getMatricula());

        $stmt->execute();
    }

    public function listar() {
        $lista_funcionarios = [];
        $resultados = $this->pdo->query( 'SELECT * FROM funcionario ORDER BY matricula' );
        while ($resultado = $resultados->fetch()) {
            $funcionario = new Funcionario();
            $funcionario->setMatricula($resultado['matricula']);
            $funcionario->setNome($resultado['nome']);
            $funcionario->setCpf($resultado['cpf']);
            $funcionario->setDataNascimento($resultado['data_nascimento']);
            $funcionario->setFuncao($resultado['funcao']);
            $funcionario->setSalario($resultado['salario']);
            $funcionario->setDataAdmissao($resultado['data_admissao']);
            $funcionario->setDataDemissao($resultado['data_demissao']);
            array_push($lista_funcionarios, $funcionario);
        }
        return $lista_funcionarios;
    }

    public function buscarPorMatricula($matricula) {
        $sql = 'SELECT * FROM funcionario WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);
        $stmt->execute();
        $resultado = $stmt->fetch();
        
        $funcionario = new Funcionario();
        $funcionario->setMatricula($resultado['matricula']);
        $funcionario->setNome($resultado['nome']);
        $funcionario->setCpf($resultado['cpf']);
        $funcionario->setDataNascimento($resultado['data_nascimento']);
        $funcionario->setFuncao($resultado['funcao']);
        $funcionario->setSalario($resultado['salario']);
        $funcionario->setDataAdmissao($resultado['data_admissao']);
        $funcionario->setDataDemissao($resultado['data_demissao']);

        return $funcionario;
    }

    public function excluir($matricula) {
        $sql = 'DELETE FROM funcionario WHERE matricula = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $matricula);

        $stmt->execute();
    }

}