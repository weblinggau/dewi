<div class="container-fluid">

          <div class="row">

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Setting Page About US</h6>
                  </div>
                  <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url("about/edit");?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Title Page</label>
                        <input type="hidden" name="id" value="<?= $about->id_about;?>">
                        <input type="text" class="form-control"  name="judul" value="<?= $about->judul; ?>">
                      </div>
                      <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" id="des" name="isi"><?= $about->isi; ?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user">Save Data</button>
                    </form>
                  <div>
                         
            </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      