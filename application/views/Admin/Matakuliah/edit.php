<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <div class="card">

                <div class="card-header">
                    Edit Mata Kuliah
                </div>

                <div class="card-body">
                    <div class="card-body">
                        <?php if(validation_errors()) : ?>

                        <div class="alert alert-danger">
                            <?= validation_errors(); ?>
                        </div>

                        <?php endif; ?>

                        <select name="nidn" class="form-control">

                            <?php foreach($dosen as $d): ?>

                            <option value="<?= $d->nidn ?>" <?= $d->nidn == $matkul->nidn ? 'selected' : '' ?>>

                                <?= $d->nama_dosen ?>

                            </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
    <?php $this->load->view('templates/script'); ?>