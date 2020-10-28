<div class="container-fluid">

          <div class="row">

            <div class="col-lg-8 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
                  </div>
                  <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Url</th>
                          <th>Penulis</th>
                          <th>Kategori</th>
                          <th>Tanggal</th>
                          <th>Isi</th>
                          <th>File</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                        $no = 1;
                        foreach ($artikel as $a) {
                         ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $a->pa_judul; ?></td>
                          <td><a href="<?= base_url("artikel/detail/").$a->pa_link; ?>"><?= base_url("artikel/detail/").$a->pa_link; ?></td>
                          <td><?= $a->pa_penulis; ?></td>
                          <td><?= $a->kategori; ?></td>
                          <td><?= $a->pa_tgl; ?></td>
                          <td><?= substr($a->pa_isi, 0, 50); ?></td>
                          <td>
                            <img src="<?= base_url('uis/img/bg-img/').$a->pa_file; ?>"  width="50%">
                          </td>
                          <td>
                              <a href="" data-toggle="modal" data-target="#editartikel" data-id="<?= $a->partikelid; ?>">
                              <span class="badge badge-success">Edit</span>
                              </a>
                              <a href="<?= base_url("artikel/hapus/").$a->partikelid;?>">
                              <span class="badge badge-danger">Hapus</span>
                              </a>
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

            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Instructions</h6>
                  </div>
                  <div class="card-body">
                    <p>Untuk menambahkan klik tombol berikut</p>
                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#artikel">
                      <span class="icon text-white-50">
                          <i class="fas fa-arrow-right"></i>
                      </span>
                      <span class="text">Tambah Data</span>
                    </a>
                    
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <div class="modal fade" id="artikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="user" method="post" action="<?= base_url("artikel/add");?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Judul Artikel</label>
                  <input type="text" class="form-control"  name="judul">
                </div>
                <div class="form-group">
                  <label>Penulis</label>
                  <input type="text" class="form-control"  name="penulis">
                </div>
                <div class="form-group">
                    <label>File gambar</label>
                    <label>Tipe file .png|.jpg|.gif maksimal ukuran 1MB</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="logo" >
                      <label class="custom-file-label" for="customFile">Tubnail</label>
                    </div>
                </div>
                <div class="form-group">
                  <label>kategori</label>
                  <select class="form-control" name="kategori">
                    <?php foreach ($kategori as $k) {?>
                    <option value="<?= $k->id_kategori; ?>"><?= $k->kategori;?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                  <textarea id="des" name="isi"></textarea>
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
      <div class="modal fade" id="editartikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="prodi" method="post" action="<?= base_url("artikel/update")?>" enctype="multipart/form-data">
              <div class="modal-data"></div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-user">Edit Data</button>
            </div>
            </form>
          </div>
        </div>
      </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#editartikel').on('show.bs.modal', function (e) {
            var userDat = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : '<?= base_url("artikel/praedit") ?>',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'artik='+ userDat,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>