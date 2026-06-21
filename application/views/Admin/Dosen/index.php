<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <h3>Data Dosen</h3>

            <?php if($this->session->flashdata('success')): ?>

            <div class="alert alert-success alert-dismissible fade show">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <?php endif; ?>
            <a href="<?= base_url('index.php/dosen/tambah')?>" class="btn btn-success mb-3">

                Tambah Dosen

            </a>
            <?php if($this->session->flashdata('success')) : ?>

            <div class="alert alert-success alert-dismissible fade show">

                <?= $this->session->flashdata('success'); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>

            <?php endif; ?>

            <table class="table table-bordered datatable">

                <thead>
                    <tr>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($dosen as $d): ?>

                    <tr>

                        <td><?= $d->nidn ?></td>
                        <td><?= $d->nama_dosen ?></td>
                        <td><?= $d->email ?></td>

                        <td>

                            <a href="<?= base_url('index.php/dosen/edit/'.$d->nidn) ?>" class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <a href="<?= base_url('index.php/dosen/hapus/'.$d->nidn) ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data?')">

                                Hapus

                            </a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/script'); ?>