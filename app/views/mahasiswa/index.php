<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::Flash(); ?>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            tambah data mahasiswa
        </button>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
 <div class="input-group">
  <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplite="off">
  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
</div>
</form>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
        
        <br><br>
            <h3>daftar mahasiswa</h3>
                    <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs ) : ?>
                      <li class="list-group-item">
                          <?= $mhs['nama']; ?>
                          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end me-1" onclick="return confirm('yakin?');">hapus</a>
                          <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-warning float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end me-1">detail</a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                
        </div>
    </div> 

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama"name="nama">
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp"name="nrp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Planalogi">Teknik Planalogi</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>