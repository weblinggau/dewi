<div class="container-fluid">

          <div class="row">

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pesan Dari Pengunjung</h6>
                  </div>
                  <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($kontak as $k) {
                         ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $k->nama; ?></td>
                          <td><?= $k->email; ?></td>
                          <td><?= $k->pesan; ?></td>
                          <td>
                            <a href="<?= base_url("kontak/hapus/").$k->id_kontak;?>">
                            <span class="badge badge-danger">Hapus</span>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>        
              </table>
            </div>
                  </div>
                </div>
            </div>
            <!-- batas akhir -->
          </div>
        </div>
      </div>
      

      