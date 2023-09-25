<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
<div class="main">
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Praktikum Web Lanjut</div>
    </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Input Form</h3></div>
                                    <div class="card-body">
                                    <form action="<?= base_url('/user/store') ?>" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nama" id="nama" type="text" placeholder="nama" />
                                                <label for="nama">Nama</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="npm" id="npm" type="number" placeholder="npm" />
                                                <label for="npm">NPM</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="kelas" id="kelas" type="text" placeholder="kelas" />
                                                <label for="kelas">Kelas</label>
                                                <?php
                                                foreach ($kelas as $item){
                                                    ?>
                                                    <option values="<?= $item['id'] ?>">
                                                    <?= $item['nama_kelas'] ?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="submit" >Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </div>
</form>
</div>
</body>
</html>