<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2">
        </div>

        <div class="sipbi valign-text-bottom">
        <div class="menu">
                    <ul>
                    <p>Praktikum Web Lanjut<p>
                        <li><a href="/user">List User</a></li>
                    </ul>
        </div>
        </div>
    </div>

    <div class= "main">
    <div class="ratio ratio-16x9">
    <div class="bg-danger bg-opacity-50">
    <center><h1>List Kelas</h1></center>
    <hr/>
    <div class="profile-area">
        <div class="container">
            <div class="row">
    <center><div class="card border-danger" style="max-width: 600px;">
            <div class="card-header bg-primary">
               
                <h2> Tabel Kelas </h2>
            </div> 
            <div class="card-body ">  
                <table class="table">
                                <thead>
                                    <tr class="table-danger">
                                        
                                        <th>ID</th>
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
                                        <td><?= $user['nama_kelas'] ?></td>
                                        <td>
                                        <a href="<?= base_url('kelas/' . $user['id'] . '/edit') ?>" type="button" class="btn btn-info">Edit</a>
                                        
                                        <form action="<?= base_url('kelas/' . $user['id']) ?>" method="post">
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
                            <a href="<?= base_url(relativePath: '/kelas/create')?>" class="btn btn-primary">Tambah Data</a>
                    </div>
                <div class="card-footer">
                Table list Kelas
                </div>
        </div> </center>
    </div>
</div>
</div>
</div>
</div>

<?= $this->endSection() ?>