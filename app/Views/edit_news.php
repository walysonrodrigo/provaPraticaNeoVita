<?= $this->extend('form_news') ?>
<?= $this->section('titlePage') ?>
  <div class="row d-flex justify-content-center">
    <div class="col-8">
      <h1>Editar Notícias</h1>
    </div>
  </div>
<?= $this->endSection() ?>
<?= $this->section('inputPage') ?>
  <button type="submit" class="btn btn-primary mt-2 card-link"><i class="fas fa-edit"></i> Editar</button>
<?= $this->endSection() ?>