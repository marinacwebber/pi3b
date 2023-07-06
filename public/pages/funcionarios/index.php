<?php

require_once __DIR__ . '/../../../src/acoes/funcionario/listar-funcionario.php';
?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

        <h1 class = 'mt-4'>Listagem de funcionários</h1>

        <a class="btn btn-success mt-4" href="/funcionarios/form">Novo funcionário</a>

        <table class = 'table table-hover mt-4'>
            <thead>
                <tr>
                    <th scope = 'col'>Matrícula</th>
                    <th scope = 'col'>Nome</th>
                    <th scope = 'col'>CPF</th>
                    <th scope = 'col'>Data de nascimento</th>
                    <th scope = 'col'>Função</th>
                    <th scope = 'col'>Salário</th>
                    <th scope = 'col'>Data de admissão</th>
                    <th scope = 'col'>Data de demissão</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $lista as $funcionario ) { ?>
                    <tr>
                        <td><?= $funcionario->getMatricula() ?></td>
                        <td><?= $funcionario->getNome()?></td>
                        <td><?= $funcionario->getCpf()?></td>
                        <td><?= $funcionario->getDataNascimento()?></td>
                        <td><?= $funcionario->getFuncao()?></td>
                        <td><?= $funcionario->getSalario()?></td>
                        <td><?= $funcionario->getDataAdmissao()?></td>
                        <td><?= $funcionario->getDataDemissao()?></td>
                        <th>
                            <a class="btn btn-primary btn-sm" href="/funcionarios/form?matricula=<?=$funcionario->getMatricula()?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="/funcionarios/remove?matricula=<?=$funcionario->getMatricula()?>">Excluir</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>