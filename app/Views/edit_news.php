<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
  <form action="<?= site_url('news/update/'.$new['id']) ?>" method="post">
    <div class="row">
      <div class="col col-sm-9">
        <h1>Editar Notícias</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="form-group mb-1">
              <h6 class="form-label" for="title">Título</h6>
              <input type="text" name="title" id="title" class="form-control" maxLength = "250" value="<?= $new['title'] ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="author">Autor</h6>
              <input type="text" name="author" id="author" class="form-control" maxLength = "250" value="<?= $new['author'] ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="content">Conteúdo</h6>
              <textarea name="content" id="content" maxLength = "250" class="form-control"><?= $new['content'] ?></textarea>
            </div>
            <?php
              if(session()->getFlashdata('status')) {
                foreach (session()->getFlashdata('status') as $error) {
                  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                  echo  $error;
                  echo  '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                  echo '</div>';
                }
              }
              if(session()->getFlashdata('success')) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo  session()->getFlashdata('success');
                echo  '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';
              }
            ?>
            <input type="submit" class="btn btn-primary mt-2 card-link" value="Editar"></button>
            <a href="/news/" class="btn btn-secondary mt-2 card-link"> Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </form>
<?= $this->endSection() ?>