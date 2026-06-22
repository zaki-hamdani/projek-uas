<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view(
            'templates/sidebar_mahasiswa'
        ); ?>

        <div class="col-md-10 p-4">

            <h2>Dashboard Mahasiswa</h2>

            <div class="card mt-3">

                <div class="card-header bg-primary text-white">

                    Profil Mahasiswa

                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>

                            <th width="200">
                                NIM
                            </th>

                            <td>
                                <?= $mhs->nim ?>
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Nama
                            </th>

                            <td>
                                <?= $mhs->nama ?>
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Program Studi
                            </th>

                            <td>
                                <?= $mhs->prodi ?>
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Semester
                            </th>

                            <td>
                                <?= $mhs->semester ?>
                            </td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $this->load->view('templates/footer'); ?>