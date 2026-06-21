<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="col-md-10 p-4">

            <h3>Dashboard Admin</h3>

            <div class="row">

                <div class="col-md-3">

                    <div class="card">
                        <div class="card-body">

                            <h5>Mahasiswa</h5>

                            <h2><?= $total_mahasiswa ?></h2>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card">
                        <div class="card-body">

                            <h5>Dosen</h5>

                            <h2><?= $total_dosen ?></h2>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card">
                        <div class="card-body">

                            <h5>Mata Kuliah</h5>

                            <h2><?= $total_matkul ?></h2>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card">
                        <div class="card-body">

                            <h5>Absensi</h5>

                            <h2><?= $total_absensi ?></h2>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/script'); ?>