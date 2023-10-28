<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2">
        </div>

        <div class="sipbi valign-text-bottom">
        <div class="menu">
                    <ul>
                    <p>Praktikum Web Lanjut<p>
                        <li><a href="/user/create">Tambah Data</a></li>
                        <li><a href="/kelas">List Kelas</a></li>
                    </ul>
        </div>
        </div>
    </div>
    <div class= "main">
        
    <!-- <div class= "btn-edit">
        <a href="/user/create" button type="submit" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class= "btn-edit">
        <a href="/user/kelas" button type="submit" class="btn btn-primary">List Kelas</a>
    </div> -->

    <table class="table">
        <thead>
            <tr class="table-danger">
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
    <tbody>
        <?php
        foreach ($users as $user){
            ?>
            <tr class="table-success">
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-primary">Detail </a>
                <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" type="button" class="btn btn-info">Edit</a>
                
                <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
        
</body>
</div>

<?= $this->endSection() ?>