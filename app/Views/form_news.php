<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
  <?php
    //verificar se tem id para passar ao editar
    $id = isset($new['id']) ? '/'.$new['id'] : '';
    echo form_open('news/'.$rout.$id)
  ?>
  <?= $this->renderSection('titlePage');?>
    <div class="row d-flex justify-content-center">
      <div class="col-8">
        <div class="card card-shadow">
          <div class="card-body">
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
            <div class="form-group mb-1">
              <h6 class="form-label" for="title">Título</h6>
              <input type="text" name="title" id="title" class="form-control" maxLength = "250" value="<?= isset($new['title']) ? $new['title'] : '' ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="author">Autor</h6>
              <input type="text" name="author" id="author" class="form-control" maxLength = "250" value="<?= isset($new['author']) ? $new['author'] : '' ?>">
            </div>
            <div class="form-group mb-1">
              <h6 class="form-label" for="content">Conteúdo</h6>
              <textarea name="content" id="content" maxLength = "250" class="form-control" rows="6"><?= isset($new['content']) ? $new['content'] : ''?></textarea>
            </div>
            <hr>
            <a href="/news/" class="btn btn-secondary mt-2 card-link"><i class="fas fa-arrow-left"></i></a>
            <?= $this->renderSection('inputPage') ?>
          </div>
        </div>
      </div>
    </div>
  <?php echo form_close()?>
<?= $this->endSection() ?>