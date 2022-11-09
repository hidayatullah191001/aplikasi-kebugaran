<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a>
								<span>&nbsp > &nbsp</span>
								<a href="<?=base_url('tes') ?>">Tes Fisik</a>
								<span>&nbsp > &nbsp</span>
								<a href="<?=base_url('tes/halaman_tes/').$atlet['id'] ?>"><?=$title ?></a>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h4>Data atlet</h4>
						<br>
						<small class="text-muted">Nama Lengkap</small>
						<h5><?=$atlet['nama'] ?></h5>
						<small class="text-muted">Email</small>
						<h5><?=$atlet['email'] ?></h5>
						<small class="text-muted">Usia</small>
						<h5><?=$atlet['usia'] ?></h5>
						<small class="text-muted">Jenis Kelamin</small>
						<h5><?=$atlet['jenis_kelamin'] ?></h5>
					</div>
					<hr>
					<div class="card-body">
						<h4>Lakukan Tes</h4>
						<br>
						<div class="row">
							<div class="col mb-3">
								<a type="button" href="<?=base_url('kekuatan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Kekuatan</a>
								<a type="button" href="<?=base_url('dayaotot/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Daya Otot</a>
								<a type="button" href="<?=base_url('kelentukan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Kelentukan</a>
								<a type="button" href="<?=base_url('keseimbangan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Keseimbangan</a>
							</div>

							<div class="col mb-3">
								<a href="<?=base_url('dayatahan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Daya Tahan</a>
								<a href="<?=base_url('kecepatan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Kecepatan</a>
								<a href="<?=base_url('kelincahan/uji/').$atlet['id'] ?>" class="btn btn-primary mb-3" type="button">Tes Kelincahan</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>

				table {
					width: 100%;
					border-collapse: collapse;
				}
			</style>
			<div class="col-md-7">
				<div class="card p-4">
					<div class="card-body">
						<h2><strong>Hasil Tes Fisik atlet</strong></h2>
						<br>
						<p>
							Nama : <?=$atlet['nama'] ?><br>
							Usia : <?=$atlet['usia'] ?><br>
							Jenis Kelamin : <?=$atlet['jenis_kelamin'] ?>
						</p>
						<br>
						<?php if (count($dayatahan) != 0): ?>
							<h4>Hasil Tes Daya Tahan</h4>
							<div class="table-responsive ">
								<table class="table">
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($kekuatan) != 0): ?>
							<h4>Hasil Tes Kekuatan</h4>
							<div class="table-responsive ">
								<table class="table">
									<thead>
										<tr>
											<th>No</th>
											<th scope="col">Cabang Olahraga</th>
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($dayaotot) != 0): ?>
							<h4>Hasil Tes Daya Otot</h4>
							<div class="table-responsive ">
								<table class="table">
									<thead>
										<tr>
											<th>No</th>
											<th scope="col">Cabang Olahraga</th>
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($kecepatan) != 0): ?>
							<h4>Hasil Tes Kecepatan</h4>
							<div class="table-responsive ">
								<table class="table">
									<thead>
										<tr>
											<th>No</th>
											<th scope="col">Cabang Olahraga</th>
											<th width="200">Lari 30 Meter</th>
											<th width="200">lari 50 Meter</th>
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($kelentukan) != 0): ?>
							<h4>Hasil Tes Kelentukan</h4>
							<div class="table-responsive ">
								<table class="table">
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($kelincahan) != 0): ?>
							<h4>Hasil Tes Kelincahan</h4>
							<div class="table-responsive ">
								<table class="table">
									<thead>
										<tr>
											<th>No</th>
											<th scope="col">Cabang Olahraga</th>
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
							</div>
						<?php endif ?>
						<br>
						<?php if (count($keseimbangan) != 0): ?>
							<h4>Hasil Tes Keseimbangan</h4>
							<div class="table-responsive ">
								<table class="table">
									<thead>
										<tr>
											<th>No</th>
											<th scope="col">Cabang Olahraga</th>
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
							</div>
						<?php endif ?>
					</div>
				</div>

			</div>
		</div>
