<div class="container  mb-5">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp :</label>
                            <input type="text" class="form-control" name="nrp" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <small class=" form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class=" form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan :</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="ubah">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>