<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

    <div class="row">

        <?php $this->load->view(
            'templates/sidebar_mahasiswa'
        ); ?>

        <div class="col-md-10 p-4">

            <h2>Riwayat Absensi</h2>

            <div class="card mt-3">

                <div class="card-header">

                    Data Absensi
                    <?= $mhs->nama; ?>

                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Mata Kuliah</th>
                                <th>Pertemuan</th>
                                <th>Status</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            foreach($riwayat as $r):
                            ?>

                            <tr>

                                <td>
                                    <?= $no++ ?>
                                </td>

                                <td>
                                    <?= date(
                                        'd-m-Y',
                                        strtotime(
                                            $r->tanggal
                                        )
                                    ) ?>
                                </td>

                                <td>
                                    <?= $r->nama_matkul ?>
                                </td>

                                <td>
                                    <?= $r->pertemuan ?>
                                </td>

                                <td>

                                    <?php
                                    if(
                                        $r->status_kehadiran
                                        == 'Hadir'
                                    ):
                                    ?>

                                    <span class="badge bg-success">
                                        Hadir
                                    </span>

                                    <?php elseif(
                                        $r->status_kehadiran
                                        == 'Izin'
                                    ): ?>

                                    <span class="badge bg-warning">
                                        Izin
                                    </span>

                                    <?php elseif(
                                        $r->status_kehadiran
                                        == 'Sakit'
                                    ): ?>

                                    <span class="badge bg-info">
                                        Sakit
                                    </span>

                                    <?php else: ?>

                                    <span class="badge bg-danger">
                                        Alpha
                                    </span>

                                    <?php endif; ?>

                                </td>

                            </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $this->load->view('templates/footer'); ?>