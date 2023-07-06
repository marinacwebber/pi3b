<?php

require_once __DIR__ . '/../../../src/acoes/colaborador/listar-colaborador.php';
?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

        <h1 class = 'mt-4'>Listagem de colaboradores</h1>

        <a class="btn btn-success mt-4" href="/colaboradores/form">Novo colaborador</a>

        <table class = 'table table-hover mt-4'>
            <thead>
                <tr>
                    <th scope = 'col'>Matrícula</th>
                    <th scope = 'col'>Nome</th>
                    <th scope = 'col'>CPF</th>
                    <th scope = 'col'>Data de nascimento</th>
                    <th scope = 'col'>Endereço</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $lista as $colaborador ) { ?>
                    <tr>
                        <td><?= $colaborador->getMatricula() ?></td>
                        <td><?= $colaborador->getNome()?></td>
                        <td><?= $colaborador->getCpf()?></td>
                        <td><?= $colaborador->getDataNascimento()?></td>
                        <td><?= $colaborador->getEndereco()?></td>
                        <th>
                            <a class="btn btn-primary btn-sm" href="/colaboradores/form?matricula=<?=$colaborador->getMatricula()?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="/colaboradores/remove?matricula=<?=$colaborador->getMatricula()?>">Excluir</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>