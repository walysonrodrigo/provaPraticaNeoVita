<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
  <div class="row">
    <div class="col col-sm-9">
      <h1>Notícias</h1>
    </div>
    <div class="col col-sm-3 d-flex justify-content-end align-items-start button-container">
      <a href="/news/create">
        <button class="Btn">
          <div class="sign">
            <i class="fas fa-plus"></i>
          </div>
          <div class="textBtn">Criar</div>
        </button>
      </a>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-1">
    <?php foreach ($news as $new): ?>
      <div class="col">
        <div class="card card-shadow">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: Thumbnail" src="<?=base_url()?>assets/img-card.svg" alt="">
          <div class="card-body">
            <h5 class="text-center text-truncate"><?= $new['title'] ? $new['title'] : "titulo"?></h5>
            <p class="card-text text-truncate"><?= $new['content'] ? $new['content'] : "descrição" ?></p>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/news/viewDetail/<?= $new['id'] ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="/news/edit/<?= $new['id'] ?>" class="btn btn-sm btn-success" ata-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="/news/delete/<?= $new['id'] ?>" class="btn btn-sm btn-success" ata-bs-toggle="tooltip" data-bs-placement="top" title="Deletar" onclick="return confirmarDelete()">
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

  <script>
    //fazer função para confirmarDelete
    function confirmarDelete() {
      if (!confirm("Tem certeza que deseja deletar esta notícia?")) {
        return false;
      }
      return true;
    }
  </script>
<?= $this->endSection() ?>

