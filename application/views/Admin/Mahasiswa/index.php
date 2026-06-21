<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <h3>Data Mahasiswa</h3>

            <?php if($this->session->flashdata('success')): ?>

            <div class="alert alert-success alert-dismissible fade show">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <?php endif; ?>
            <a href="<?= base_url('index.php/mahasiswa/tambah')?>" class="btn btn-success mb-3">

                Tambah Mahasiswa

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

                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach($mahasiswa as $m): ?>

                    <tr>

                        <td><?= $m->nim ?></td>
                        <td><?= $m->nama ?></td>
                        <td><?= $m->prodi ?></td>
                        <td><?= $m->semester ?></td>

                        <td>

                            <a href="<?= base_url('index.php/mahasiswa/edit/'.$m->nim) ?>"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <a href="<?= base_url('index.php/mahasiswa/hapus/'.$m->nim) ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
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