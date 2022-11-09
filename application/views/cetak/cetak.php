<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<style type="text/css">
		th{
			font-size: 11px;
		}
		td{
			font-size: 11px;
		}
	</style>
</head>
<body>
	<h2><strong>Hasil Tes Fisik Atlet</strong></h2>
	<br>
	<p>
		Nama : <?=$atlet['nama'] ?><br>
		Usia : <?=$atlet['usia'] ?><br>
		Jenis Kelamin : <?=$atlet['jenis_kelamin'] ?>
	</p>
	<br><br>
	<?php if (count($dayatahan) != 0): ?>
		<h6>Hasil Tes Daya Tahan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th scope="col">Cabang Olahraga</th>
					<th>Multi Tahap</th>
					<th>lari 1.6 KM</th>
					<th>Lari 300 M</th>
					<th>Lari 12 Menit</th>
					<th>Naik Turun Bangku</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($dayatahan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['multitahap']?></td>
						<td><?=$dt['lari16km']?></td>
						<td><?=$dt['lari300m']?></td>
						<td><?=$dt['lari12menit']?></td>
						<td><?=$dt['naikturunbangku']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($kekuatan) != 0): ?>
		<h6>Hasil Tes Kekuatan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Cabang Olahraga</th>
					<th>Push Up</th>
					<th>Sit Up</th>
					<th>Pull Up</th>
					<th>Genggam Tangan Kanan</th>
					<th>Genggam Tangan Kiri</th>
					<th>Tarik dan Dorong</th>
					<th>Punggung</th>
					<th>Tungkai</th>
					<th>Wall Squat</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($kekuatan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['pushup']?></td>
						<td><?=$dt['situp']?></td>
						<td><?=$dt['pullup']?></td>
						<td><?=$dt['GTKA']?></td>
						<td><?=$dt['GTKI']?></td>
						<td><?=$dt['tarikdorong']?></td>
						<td><?=$dt['punggung']?></td>
						<td><?=$dt['tungkai']?></td>
						<td><?=$dt['wallsquat']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($dayaotot) != 0): ?>
		<h6>Hasil Tes Daya Otot</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Cabang Olahraga</th>
					<th>Vertical Jump</th>
					<th>Standing Broad Jump</th>
					<th>Medicine Ball</th>
					<th>Panjat Tambang Vertikal</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($dayaotot as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['vertical_jump']?></td>
						<td><?=$dt['standing']?></td>
						<td><?=$dt['medicine_ball']?></td>
						<td><?=$dt['panjat_tambang']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($kecepatan) != 0): ?>
		<h6>Hasil Tes Kecepatan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Cabang Olahraga</th>
					<th>Lari 30 Meter</th>
					<th>lari 50 Meter</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($kecepatan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['lari30']?></td>
						<td><?=$dt['lari50']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($kelentukan) != 0): ?>
		<h6>Hasil Tes Kelentukan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th scope="col">Cabang Olahraga</th>
					<th>Sit and Reach</th>
					<th>Standing Trunk Flexion</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($kelentukan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['sitandreach']?></td>
						<td><?=$dt['standingtrunk']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($kelincahan) != 0): ?>
		<h6>Hasil Tes Kelincahan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Cabang Olahraga</th>
					<th>Dodging Run</th>
					<th>Agility Run</th>
					<th>T Test</th>
					<th>Illinois Run</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($kelincahan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['dodging']?></td>
						<td><?=$dt['agility']?></td>
						<td><?=$dt['ttest']?></td>
						<td><?=$dt['illinois']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<br>
	<?php if (count($keseimbangan) != 0): ?>
		<h6>Hasil Tes Keseimbangan</h6>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Cabang Olahraga</th>
					<th>Stork Stand</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach ($keseimbangan as $dt) : ?>
					<tr>
						<th scope="row"><?=$i++ ?></th>
						<td><?=$dt['nama_cabor'] ?></td>
						<td><?=$dt['storkstand']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
</body>
</html>