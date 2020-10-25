<div class="container-fluid">

          <div class="row">

            <div class="col-lg-8 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Setting Data Website</h6>
                  </div>
                  <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Judul Website</th>
                          <th>Logo Website</th>
                          <th>Alamat</th>
                          <th>Telp</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $setting->judul; ?></td>
                          <td>
                            <img src="<?= base_url('uis/img/core-img/').$setting->logo; ?>"  width="100%">
                          </td>
                          <td><?= $setting->alamat; ?></td>
                          <td><?= $setting->telp; ?></td>
                          <td><?= $setting->email; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>        
              </table>
            </div>
                  </div>
                </div>
            </div>
            <!-- batas akhir -->

            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Instructions</h6>
                  </div>
                  <div class="card-body">
                    <p>Untuk merubah klik tombol berikut</p>
                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#setting">
                      <span class="icon text-white-50">
                          <i class="fas fa-arrow-right"></i>
                      </span>
                      <span class="text">Edit Setting</span>
                    </a>
                  
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <div class="modal fade" id="setting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Setting</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="user" method="post" action="<?= base_url("setting/edit");?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Judul Website</label>
                  <input type="hidden" name="id" value="<?= $setting->id_seting; ?>">
                  <input type="hidden" name="gambr" value="<?= $setting->logo; ?>">
                  <input type="text" class="form-control"  name="judul" value="<?= $setting->judul;  ?>">
                </div>
                <div class="form-group">
                  <label>Telp</label>
                  <input type="text" class="form-control"  name="telp" value="<?= $setting->telp; ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control"  name="email" value="<?= $setting->email;  ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" id="des" name="alamat"><?= $setting->alamat; ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Logo Website</label>
                    <div>
                      <img src="<?= base_url('uis/img/core-img/').$setting->logo; ?>"  width="50%">
                    </div>
                    <label>Tipe file .png|.jpg|.gif maksimal ukuran 1MB</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="logo" >
                      <label class="custom-file-label" for="customFile">Logo Website</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-user">Save Data</button>
            </div>
            </form>
          </div>
        </div>
      </div>
<script>
          tinymce.init({
            selector: '#des'
          });
  </script>
      