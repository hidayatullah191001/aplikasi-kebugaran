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
			<form method="post" action="<?=base_url('kecepatan/uji/').$atlet['id'] ?>">
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header">
								<?=$title ?>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Lari 30 Meter</label>
									<div class="col-sm-6">
										<input type="text" name="teslari30" value="<?=set_value('teslari30') ?>" class="form-control" id="teslari30">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-6 col-form-label">Lari 50 Meter</label>
									<div class="col-sm-6">
										<input type="text" name="teslari50" value="<?=set_value('teslari50') ?>" class="form-control" id="teslari50">
									</div>
								</div>
								<div>
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
										<input readonly="" type="text" class="form-control" id="hsllari30" name="hsllari30" value="<?=set_value('hsllari30') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hsllari50" name="hsllari50" value="<?=set_value('hsllari50') ?>">
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
								<th width="200">Lari 30 Meter</th>
								<th width="200">lari 50 Meter</th>
								<th width="200">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($count < 1): ?>
								<tr>
									<td colspan="9">
										<div class="alert alert-danger">Data tes tidak ditemukan</div>
									</td>
								</tr>

								<?php else: ?>

									<?php $i = 1 ?>
									<?php foreach ($kecepatan as $dt) : ?>
										<tr>
											<th scope="row"><?=$i++ ?></th>
											<td>
												<?php if ($atlet['id'] == $dt['idatlet']): ?>
													<?=$atlet['nama'] ?>
												<?php endif ?>
											</td>
											<td><?php 
											date_default_timezone_set('Asia/Jakarta');
											echo date('d F Y H:i', $dt['tanggal']); ?> WIB
										</td>
										<td><?=$dt['nama_cabor'] ?></td>
										<td><?=$dt['lari30']?></td>
										<td><?=$dt['lari50']?></td>
										<td>
											<a href="<?=base_url('kecepatan/hapusdata/').$atlet['id'].'/'.$dt['id']?>" class="btn btn-sm btn-danger">Hapus</a>
										</td>
									</tr>
								<?php endforeach ?>
							<?php endif ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<script src="<?=base_url('assets/dist/js/data tes/kecepatan.js') ?>"></script>
		<script type="text/javascript">
			function bersih(){
				document.getElementById('teslari30').value = '';
				document.getElementById('teslari50').value = '';

				document.getElementById('hsllari30').value = '';
				document.getElementById('hsllari50').value = '';
			}
		</script>