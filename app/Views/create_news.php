<?= $this->extend('form_news') ?>
<?= $this->section('titlePage') ?>
  <div class="row d-flex justify-content-center">
    <div class="col-8">
      <h1>Cadastro notícias</h1>
    </div>
  </div>
<?= $this->endSection() ?>
<?= $this->section('inputPage') ?>
  <button type="submit" class="btn btn-primary mt-2 card-link"><i class="fas fa-plus"></i> Cadastrar</button>
<?= $this->endSection() ?>