<div class="container mt-3">

    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            tambah data mahasiswa
        </button>
        <br><br>
            <h3>daftar mahasiswa</h3>
                    <ul class="list-group">
                    <?php foreach( $data['mhs']as $mhs ) : ?>
                      <li class="list-group-item d-flex justify-content-between align-items-center"">
                          <?= $mhs['nama']; ?>
                          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">detail</a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul modal">tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
    <form action="<? BASEURL; ?>/mahasiswa/tambah" method="post">
    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" id="nama" nama="nama">
    </div>
    <div class="form-group">
        <label for="nis">nis</label>
        <input type="number" class="form-control" id="nis" nama="nis">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" nama="email">
    </div>
    
    <div class="form-group">
        <label for="jurusan">jurusan</label>
        <select class="form-control" id="jurusan">
               <option value= "RPL">RPL</option>
               <option value= "TKJ">TKJ</option>
               <option value= "perhotelan">perhotelan</option>
               <option value= "multimedia">multimedia</option>
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