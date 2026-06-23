<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

<div class="row">

<?php $this->load->view('templates/sidebar_dosen'); ?>

<div class="col-md-10 p-4">

<h3>Data Absensi</h3>

<a href="<?= base_url('index.php/absensi/tambah') ?>"
class="btn btn-primary mb-3">
Tambah Absensi
</a>

<table class="table table-bordered">

<tr>
<th>NIM</th>
<th>Mahasiswa</th>
<th>Mata Kuliah</th>
<th>Tanggal</th>
<th>Pertemuan</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php foreach($absensi as $a): ?>

<tr>

    <td><?= $a->nim ?></td>
    <td><?= $a->nama ?></td>
    <td><?= $a->nama_matkul ?></td>
    <td><?= $a->tanggal ?></td>
    <td><?= $a->pertemuan ?></td>
    <td><?= $a->status_kehadiran ?></td>

    <td>

        <a href="<?= base_url('index.php/absensi/edit/'.$a->id_absensi) ?>"
           class="btn btn-warning btn-sm">

            Edit

        </a>

        <a href="<?= base_url('index.php/absensi/hapus/'.$a->id_absensi) ?>"
           class="btn btn-danger btn-sm"
           onclick="return confirm('Yakin hapus data?')">

            Hapus

        </a>

    </td>

</tr>

<?php endforeach; ?>

</table>

</div>
</div>
</div>