<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
  <div class="row">
    <div class="col col-sm-9">
      <h1>Notícias</h1>
    </div>
    <div class="col col-sm-3 d-flex justify-content-end align-items-start">
      <a href="/news/create"  class="btn btn-lg btn-success fw-bold align-items-center"> <i class="fas fa-plus"></i> Criar</a>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-1">
    <?php foreach ($news as $new): ?>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: Thumbnail" src="<?=base_url()?>assets/img-card.svg" alt="">
          <div class="card-body">
            <h5 class="text-center"><?= $new['title'] ? $new['title'] : "titulo"?></h5>
            <p class="card-text"><?= $new['content'] ? $new['content'] : "descrição" ?></p>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/news/delete/<?= $new['id'] ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar" onclick="return confirm()">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="/news/edit/<?= $new['id'] ?>" class="btn btn-sm btn-success" ata-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="/news/delete/<?= $new['id'] ?>" class="btn btn-sm btn-success" ata-bs-toggle="tooltip" data-bs-placement="top" title="Deletar">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </div>
              <small class="text-muted">Postagem: <?= $new['publication_date'] = date('d-m-Y') ?></small>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-2">
    <?= $pager->links() ?>
  </div>
<?= $this->endSection() ?>

