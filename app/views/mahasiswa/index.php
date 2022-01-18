<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>daftar mahasiswa</h3>
                <?php foreach( $data['mhs']as $mhs ) : ?>
                    <ul>
                        <li><?= $mhs['nama']; ?></li>
                        <li><?= $mhs['nis']; ?></li>
                        <li><?= $mhs['jenis kelamin']; ?></li>
                    </ul>
                <?php endforeach; ?>
        </div>
    </div>

</div>