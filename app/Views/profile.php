<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body>
<div class="main">
<center><img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="rounded" width="250px"></center>
<div class="container">
        <div class="card" data-tilt> 

            <h2>Profile</h2>
            <br>
            <tr>
                <td><div class="..."><?= $user['nama'] ?></div></td>
            </tr>
            <br>
            <tr>
            <td><div class="..."><?= $user['nama_kelas'] ?></div></td>
            </tr>
            <br>
            <tr>
            <td><div class="..."><?= $user['npm'] ?></div></td>
            </tr>
        </div>
        <a href="<?= base_url(relativePath: 'user/')?>" class="btn btn-outline-info">Kembali</a>
</div>
</body>
<?= $this->endSection() ?>