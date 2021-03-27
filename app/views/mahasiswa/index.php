<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
                    </li>
                </ul>
                <!-- <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nrp']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                    <li><?= $mhs['foto']; ?></li>
                </ul> -->
            <?php endforeach; ?>
        </div>
    </div>
</div>