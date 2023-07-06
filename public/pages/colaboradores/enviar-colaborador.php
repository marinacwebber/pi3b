<?php

require_once __DIR__ . '/../../../src/acoes/colaborador/buscar-colaborador.php';
require_once __DIR__ . '/../../../src/classes/Colaborador.php';

$matricula = $_GET['matricula'];

$colaborador = new Colaborador();

if ($matricula !== NULL) {
  $colaborador = buscar($matricula);
}

?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

  <h1 class="mt-4">Cadastro de colaborador</h1>
  <form class="mt-4" action="<?= ($matricula === NULL || $matricula === '') ? '/colaboradores' : '/colaboradores/edit' ?>" method="POST">

    <input type="hidden" name="matricula" id="matricula" value="<?=$colaborador->getMatricula()?>">

    <div class="row">

      <div class="col-md-6 mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?=$colaborador->getNome()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$colaborador->getCpf()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_nascimento" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?=$colaborador->getDataNascimento()?>">
      </div>

      <div class="col-md-12 mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$colaborador->getEndereco()?>">
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="ms-2" href="/colaboradores">Voltar para listagem</a>
      </div>
    </div>
  </form>
  
<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>