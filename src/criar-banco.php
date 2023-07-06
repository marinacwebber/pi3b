<?php
$dbpath = 'pgsql:host=postgres;port=5432;dbname=imdaz';
$user = 'postgres';
$password = '123456';
try {
    $pdo = new PDO($dbpath, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $pdo->exec('CREATE TABLE IF NOT EXISTS aluno (
        matricula serial primary key,
        nome varchar(60) not null,
        cpf varchar(11),
        data_nascimento date not null,
        dormitorio varchar(10) not null,
        serie varchar(20) not null,
        data_entrada date not null,
        data_saida date
    )');

    echo 'Tabela criada com sucesso';
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $x) {
    echo $x->getMessage();
}

?>