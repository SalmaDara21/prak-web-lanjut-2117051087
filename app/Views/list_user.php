<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Praktikum Web Lanjut</div>
    </div>
    <div class= "main">
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
                <td><button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
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