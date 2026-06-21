<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <div class="card">

                <div class="card-header">
                    Tambah Mata Kuliah
                </div>

                <div class="card-body">
                    <?php if(validation_errors()) : ?>

                    <div class="alert alert-danger">
                        <?= validation_errors(); ?>
                    </div>

                    <?php endif; ?>

                    <form method="post">

                        <div class="mb-3">

                            <label>Nama Mata Kuliah</label>

                            <input type="text" name="nama_matkul" class="form-control" required>

                        </div>

                        <div class="mb-3">

                            <label>SKS</label>

                            <input type="number" name="sks" class="form-control" required>

                        </div>

                        <div class="mb-3">

                            <label>Dosen Pengampu</label>

                            <select name="nidn" class="form-control">

                                <option value="">
                                    -- Pilih Dosen --
                                </option>

                                <?php foreach($dosen as $d): ?>

                                <option value="<?= $d->nidn ?>">

                                    <?= $d->nama_dosen ?>

                                </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <button type="submit" class="btn btn-success">

                            Simpan

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/script'); ?>