<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <div class="card">

                <div class="card-header">
                    Tambah Mahasiswa
                </div>

                <div class="card-body">
                    <?php if(validation_errors()) : ?>

                    <div class="alert alert-danger">
                        <?= validation_errors(); ?>
                    </div>

                    <?php endif; ?>

                    <form method="post">

                        <div class="mb-3">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Program Studi</label>
                            <input type="text" name="prodi" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Semester</label>
                            <input type="number" name="semester" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success">

                            Simpan

                        </button>

                        <a href="<?= base_url('index.php/mahasiswa')?>" class="btn btn-secondary">

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