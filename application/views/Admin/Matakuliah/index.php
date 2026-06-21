<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <h3>Data Mata Kuliah</h3>

            <?php if($this->session->flashdata('success')): ?>

            <div class="alert alert-success alert-dismissible fade show">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <?php endif; ?>
            <a href="<?= base_url('index.php/matakuliah/tambah')?>" class="btn btn-success mb-3">

                Tambah Mata Kuliah

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
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Dosen Pengampu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($matkul as $m): ?>

                    <tr>

                        <td><?= $m->id_matkul ?></td>
                        <td><?= $m->nama_matkul ?></td>
                        <td><?= $m->sks ?></td>
                        <td><?= $m->nama_dosen ?></td>

                        <td>

                            <a href="<?= base_url('index.php/matakuliah/edit/'.$m->id_matkul) ?>"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <a href="<?= base_url('index.php/matakuliah/hapus/'.$m->id_matkul) ?>"
                                class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">

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