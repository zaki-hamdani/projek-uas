<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container-fluid">

<div class="row">

<?php $this->load->view('templates/sidebar_dosen'); ?>

<div class="col-md-10 p-4">

<h3>Input Absensi</h3>

<form method="post">

<div class="mb-3">
<label>Mahasiswa</label>

<select name="nim" class="form-control">

<?php foreach($mahasiswa as $m): ?>

<option value="<?= $m->nim ?>">
<?= $m->nama ?>
</option>

<?php endforeach; ?>

</select>
</div>

<div class="mb-3">
<label>Mata Kuliah</label>

<select name="id_matkul" class="form-control">

<?php foreach($matakuliah as $mk): ?>

<option value="<?= $mk->id_matkul ?>">
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
class="form-control">
</div>

<div class="mb-3">
<label>Pertemuan</label>

<input
type="number"
name="pertemuan"
class="form-control">
</div>

<div class="mb-3">
<label>Status</label>

<select
name="status_kehadiran"
class="form-control">

<option value="Hadir">Hadir</option>
<option value="Izin">Izin</option>
<option value="Sakit">Sakit</option>
<option value="Alpa">Alpa</option>

</select>

</div>

<button
type="submit"
class="btn btn-success">

Simpan

</button>

</form>

</div>
</div>
</div>