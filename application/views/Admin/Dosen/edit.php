<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <div class="card">

                <div class="card-header">
                    Edit Mahasiswa
                </div>

                <div class="card-body">
                    <div class="card-body">
                        <?php if(validation_errors()) : ?>

                        <div class="alert alert-danger">
                            <?= validation_errors(); ?>
                        </div>

                        <?php endif; ?>

                        <form method="post">

                            <div class="mb-3">
                                <label>NIDN</label>

                                <input type="text" class="form-control" value="<?= $dosen->nidn ?>" readonly>

                            </div>

                            <div class="mb-3">
                                <label>Nama Dosen</label>

                                <input type="text" name="nama_dosen" class="form-control"
                                    value="<?= $dosen->nama_dosen ?>" required>

                            </div>

                            <div class="mb-3">
                                <label>Email</label>

                                <input type="email" name="email" class="form-control" value="<?= $dosen->email ?>"
                                    required>

                            </div>

                            <button type="submit" class="btn btn-warning">

                                Update

                            </button>

                            <a href="<?= base_url('index.php/dosen')?>" class="btn btn-secondary">

                                Kembali

                            </a>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
    <?php $this->load->view('templates/script'); ?>