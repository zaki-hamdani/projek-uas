<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>


<div class="container-fluid">

<div class="row">

<?php $this->load->view('templates/sidebar_dosen'); ?>

<div class="col-md-10 p-4">

<h3>Rekap Absensi Mahasiswa</h3>

<p class="text-muted">
    Rekap jumlah kehadiran mahasiswa berdasarkan seluruh data absensi.
</p>

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Hadir</th>
<th>Izin</th>
<th>Sakit</th>
<th>Alpa</th>
<th>Total</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($rekap as $r): ?>

<tr>

<td><?= $no++ ?></td>
<td><?= $r->nim ?></td>
<td><?= $r->nama ?></td>
<td class="text-success fw-bold"><?= $r->hadir ?></td>
<td class="text-warning fw-bold"><?= $r->izin ?></td>
<td class="text-info fw-bold"><?= $r->sakit ?></td>
<td class="text-danger fw-bold"><?= $r->alpa ?></td>
<td><b><?= $r->total ?></b></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/script'); ?>