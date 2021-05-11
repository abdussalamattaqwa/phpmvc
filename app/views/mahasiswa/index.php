<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?> 
      </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br>
            <h3>Daftar Mahsiswa</h3>

            <?php foreach ( $data['mhs'] as $mhs ) : ?>
                <ul class="list-group">
                <!-- d-flex justify-content-between align-items-center -->
                <li class="list-group-item "> 
                    <?= $mhs['nama'] ?> 

                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?> " class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?> " class="badge badge-success float-right ml-1 tampilModalUbah"data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];  ?>">ubah</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?> " class="badge badge-primary float-right ml-1">detail</a>

                </li>
                </ul>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>


        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" class="form-control" id="nim" name="nim">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="jurusan"></label>
          <select class="form-control" name="jurusan" id="jurusan">
            <option value="Teknik Informatiks">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>

        </form>
      </div>
    </div>
  </div>
</div>
