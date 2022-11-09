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
								<a href="<?=base_url('tes/halaman_tes/').$atlet['id'] ?>">Halaman Tes</a><span>&nbsp > &nbsp</span>
								<p><?=$title ?></p>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<?=$this->session->flashdata('message') ?>
		<div class="col">
			<div class="card">
				<div class="card-header">
					Detail Data atlet
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $atlet['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $atlet ['email'];?></h6>
					<div class="card-text">Usia : <?= $atlet['usia']; ?></div>
					<div class="card-text">Jenis Kelamin : <?= $atlet['jenis_kelamin']; ?></div>
				</div>
			</div>
		</div>

		<div class="col">
			<form method="post" action="<?=base_url('dayatahan/uji/').$atlet['id'] ?>">
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header">
								<?=$title ?>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Tes Multi Tahap</label>
									<div class="col-sm-6">
										<input type="text" name="tesmulti" value="<?=set_value('tesmulti') ?>" class="form-control" id="tesmulti">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Lari 1.6 KM</label>
									<div class="col-sm-6">
										<input type="text" name="lari16" value="<?=set_value('lari16') ?>" class="form-control" id="lari16">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Lari 300 M</label>
									<div class="col-sm-6">
										<input type="text" name="lari300" value="<?=set_value('lari300') ?>" class="form-control" id="lari300">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Lari 12 Menit</label>
									<div class="col-sm-6">
										<input type="text" name="lari12" value="<?=set_value('lari12') ?>" class="form-control" id="lari12">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Naik turun bangku</label>
									<div class="col-sm-6">
										<input type="text" name="naikturun" value="<?=set_value('naikturun') ?>" class="form-control" id="naikturun">
									</div>
								</div>
								<div class="">
									<button type="button" class="btn btn-primary w-100" onclick='hitung(<?=$atlet['usia'] ?>,"<?=$atlet['jenis_kelamin'] ?>")'>Hasil</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card">
							<div class="card-header">
								Hasil Tes
							</div>
							<div class="card-body">
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslTesmulti" name="hslTesmulti" value="<?=set_value('hslTesmulti') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslLari16" name="hslLari16" value="<?=set_value('hslLari16') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslLari300" name="hslLari300" value="<?=set_value('hslLari300') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslLari12" name="hslLari12" value="<?=set_value('hslLari12') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslNaikturun" name="hslNaikturun" value="<?=set_value('hslNaikturun') ?>">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card">
							<div class="card-header">
								Pilih Cabang Olahraga
							</div>
							<div class="card-body">
								<select name="cabor" class="form-control" required="Cabang Olahraga Wajib">
									<option selected="" disabled="">Pilih cabor...</option>
									<?php foreach ($cabor as $cb): ?>
										<option value="<?=$cb['id'] ?>"><?=$cb['nama_cabor'] ?></option>
									<?php endforeach ?>
								</select>
								<?= form_error('cabor', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								Console
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-danger btn-sm mr-3" onclick="bersih()">Batal</button>
								<button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Hasil <?=$title ?></h4>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th width="50">No</th>
								<th width="200">Nama</th>
								<th width="200">Tanggal Tes</th>
								<th width="200">Cabang Olahraga</th>
								<th width="200">Tes Multi Tahap</th>
								<th width="200">Lari 1.6 KM</th>
								<th width="200">Lari 300 M</th>
								<th width="200">Lari 12 Menit</th>
								<th width="200">Naik Turun Bangku</th>
								<th width="200">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($count < 1): ?>
								<tr>
									<td colspan="10">
										<div class="alert alert-danger">Data tes tidak ditemukan</div>
									</td>
								</tr>

								<?php else: ?>

									<?php $i = 1 ?>
									<?php foreach ($dayatahan as $dt) : ?>
										<tr>
											<th scope="row"><?=$i++ ?></th>
											<td>
												<?php if ($atlet['id'] == $dt['idmahasiswa']): ?>
													<?=$atlet['nama'] ?>
												<?php endif ?>
											</td>
											<td><?php 
											date_default_timezone_set('Asia/Jakarta');
											echo date('d F Y H:i', $dt['tanggal']); ?> WIB
										</td>
										<td><?=$dt['nama_cabor'] ?></td>
										<td><?=$dt['multitahap']?></td>
										<td><?=$dt['lari16km']?></td>
										<td><?=$dt['lari300m']?></td>
										<td><?=$dt['lari12menit']?></td>
										<td><?=$dt['naikturunbangku']?></td>
										<td>
											<a href="<?=base_url('dayatahan/hapusdata/').$atlet['id'].'/'.$dt['id']?>" class="btn btn-sm btn-danger">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							<?php endif ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<script src="<?=base_url('assets/dist/js/data tes/dayatahan.js') ?>"></script>
		<script type="text/javascript">
			function bersih(){
				document.getElementById('tesmulti').value = '';
				document.getElementById('lari16').value = '';
				document.getElementById('lari300').value = '';
				document.getElementById('lari12').value = '';
				document.getElementById('naikturun').value ='';

				document.getElementById('hslTesmulti').value = '';
				document.getElementById('hslLari16').value = '';
				document.getElementById('hslLari300').value = '';
				document.getElementById('hslLari12').value = '';
				document.getElementById('hslNaikturun').value = '';
			}
		</script>