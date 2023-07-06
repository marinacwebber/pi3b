<?php

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    switch ($uri) {
        case '/alunos':
            require_once __DIR__ . '/pages/alunos/index.php';
            break;
        case '/alunos/form':
            require_once __DIR__ .'/pages/alunos/enviar-aluno.php';
            break;
        case '/alunos/remove':
            require_once __DIR__ . '/../src/acoes/aluno/remover-aluno.php';
            break;
        case '/funcionarios':
            require_once __DIR__ . '/pages/funcionarios/index.php';
            break;
        case '/funcionarios/form':
            require_once __DIR__ .'/pages/funcionarios/enviar-funcionario.php';
            break;
        case '/funcionarios/remove':
            require_once __DIR__ . '/../src/acoes/funcionario/remover-funcionario.php';
            break;
        case '/colaboradores':
            require_once __DIR__ . '/pages/colaboradores/index.php';
            break;
        case '/colaboradores/form':
            require_once __DIR__ .'/pages/colaboradores/enviar-colaborador.php';
            break;
        case '/colaboradores/remove':
            require_once __DIR__ . '/../src/acoes/colaborador/remover-colaborador.php';
            break;
        default:
            require_once __DIR__ . '/pages/home/index.php';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($uri) {
        case '/alunos':
            require_once __DIR__ . '/../src/acoes/aluno/novo-aluno.php';
            break;
        case '/alunos/edit':
            require_once __DIR__ . '/../src/acoes/aluno/editar-aluno.php';
            break;
        case '/funcionarios':
            require_once __DIR__ . '/../src/acoes/funcionario/novo-funcionario.php';
            break;
        case '/funcionarios/edit':
            require_once __DIR__ . '/../src/acoes/funcionario/editar-funcionario.php';
            break;
        case '/colaboradores':
            require_once __DIR__ . '/../src/acoes/colaborador/novo-colaborador.php';
            break;
        case '/colaboradores/edit':
            require_once __DIR__ . '/../src/acoes/colaborador/editar-colaborador.php';
            break;
    }
}
?>



