<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

<div class="row">

<?php $this->load->view('templates/sidebar_dosen'); ?>

<div class="col-md-10 p-4">

<h3>Edit Absensi</h3>

<form method="post">

<div class="mb-3">
<label>Mahasiswa</label>

<select name="nim" class="form-control">

<?php foreach($mahasiswa as $m): ?>

<option
value="<?= $m->nim ?>"
<?= ($m->nim == $absensi->nim) ? 'selected' : '' ?>>

<?= $m->nama ?>

</option>

<?php endforeach; ?>

</select>
</div>

<div class="mb-3">
<label>Mata Kuliah</label>

<select name="id_matkul" class="form-control">

<?php foreach($matakuliah as $mk): ?>

<option
value="<?= $mk->id_matkul ?>"
<?= ($mk->id_matkul == $absensi->id_matkul) ? 'selected' : '' ?>>

<?= $mk->nama_matkul ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">
<label>Tanggal</label>

<input
type="date"
name="tanggal"
class="form-control"
value="<?= $absensi->tanggal ?>">

</div>

<div class="mb-3">
<label>Pertemuan</label>

<input
type="number"
name="pertemuan"
class="form-control"
value="<?= $absensi->pertemuan ?>">

</div>

<div class="mb-3">
<label>Status</label>

<select
name="status_kehadiran"
class="form-control">

<option value="Hadir"
<?= ($absensi->status_kehadiran == 'Hadir') ? 'selected' : '' ?>>
Hadir
</option>

<option value="Izin"
<?= ($absensi->status_kehadiran == 'Izin') ? 'selected' : '' ?>>
Izin
</option>

<option value="Sakit"
<?= ($absensi->status_kehadiran == 'Sakit') ? 'selected' : '' ?>>
Sakit
</option>

<option value="Alpa"
<?= ($absensi->status_kehadiran == 'Alpa') ? 'selected' : '' ?>>
Alpa
</option>

</select>

</div>

<button
type="submit"
class="btn btn-primary">

Update

</button>

<a href="<?= base_url('index.php/absensi') ?>"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>
</div>
</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/script'); ?>