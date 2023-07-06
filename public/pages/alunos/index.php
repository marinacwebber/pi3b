<?php require_once __DIR__ . '/../../../src/acoes/aluno/listar-aluno.php'; ?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

        <h1 class = 'mt-4'>Listagem de aluno</h1>

        <a class="btn btn-success mt-4" href="/alunos/form">Novo aluno</a>

        <table class = 'table table-hover mt-4'>
            <thead>
                <tr>
                    <th scope = 'col'>Matrícula</th>
                    <th scope = 'col'>Nome</th>
                    <th scope = 'col'>CPF</th>
                    <th scope = 'col'>Data de nascimento</th>
                    <th scope = 'col'>Dormitório</th>
                    <th scope = 'col'>Série</th>
                    <th scope = 'col'>Data de entrada</th>
                    <th scope = 'col'>Data de saída</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $lista as $aluno ) { ?>
                    <tr>
                        <td><?= $aluno->getMatricula() ?></td>
                        <td><?= $aluno->getNome()?></td>
                        <td><?= $aluno->getCpf()?></td>
                        <td><?= $aluno->getDataNascimento()?></td>
                        <td><?= $aluno->getDormitorio()?></td>
                        <td><?= $aluno->getSerie()?></td>
                        <td><?= $aluno->getDataEntrada()?></td>
                        <td><?= $aluno->getDataSaida()?></td>
                        <th>
                            <a class="btn btn-primary btn-sm" href="/alunos/form?matricula=<?=$aluno->getMatricula()?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="/alunos/remove?matricula=<?=$aluno->getMatricula()?>">Excluir</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>