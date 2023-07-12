<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
  <form action="<?= site_url('news/update/'.$new['id']) ?>" method="post">
    <div class="row">
      <div class="col col-sm-9">
        <h1>Visualizar Notícia</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="form-group mb-1">
              <h6 class="form-label" for="title">Título</h6>
              <input type="text" name="title" id="title" class="form-control" disabled value="<?= $new['title'] ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="author">Autor</h6>
              <input type="text" name="author" id="author" class="form-control" disabled value="<?= $new['author'] ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="content">Conteúdo</h6>
              <textarea name="content" id="content" disabled class="form-control"><?= $new['content'] ?></textarea>
            </div>
            <a href="/news/" class="btn btn-secondary mt-2 card-link"> Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </form>
<?= $this->endSection() ?>