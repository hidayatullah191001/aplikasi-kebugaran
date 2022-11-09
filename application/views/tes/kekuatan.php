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
					<div id="usia" class="card-text">Usia : <?= $atlet['usia']; ?></div>
					<div id="jenis_kelamin" class="card-text">Jenis Kelamin : <?= $atlet['jenis_kelamin']; ?></div>
				</div>
			</div>
		</div>

		<div class="col">
			<form method="post" action="<?=base_url('kekuatan/uji/').$atlet['id'] ?>">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header">
								<?=$title ?>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Push Up</label>
									<div class="col">
										<input type="text" name="tespushup" value="<?=set_value('tespushup') ?>" class="form-control" id="tespushup">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Sit Up</label>
									<div class="col">
										<input type="text" name="tessitup" value="<?=set_value('tessitup') ?>" class="form-control" id="tessitup">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Pull Up</label>
									<div class="col">
										<input type="text" name="tespullup" value="<?=set_value('tespullup') ?>" class="form-control" id="tespullup">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Genggam Tangan Kanan</label>
									<div class="col">
										<input type="text" name="tesgtka" value="<?=set_value('tesgtka') ?>" class="form-control" id="tesgtka">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Genggam Tanggan Kiri</label>
									<div class="col">
										<input type="text" name="tesgtki" value="<?=set_value('tesgtki') ?>" class="form-control" id="tesgtki">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Tarik dan Dorong</label>
									<div class="col">
										<input type="text" name="testarikdorong" value="<?=set_value('testarikdorong') ?>" class="form-control" id="testarikdorong">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Punggung</label>
									<div class="col">
										<input type="text" name="tespunggung" value="<?=set_value('tespunggung') ?>" class="form-control" id="tespunggung">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Tungkai</label>
									<div class="col">
										<input type="text" name="testungkai" value="<?=set_value('testungkai') ?>" class="form-control" id="testungkai">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-7 col-form-label">Wall Squat</label>
									<div class="col">
										<input type="text" name="teswallsquat" value="<?=set_value('teswallsquat') ?>" class="form-control" id="teswallsquat">
									</div>
								</div>
								<div class="">
									<button type="button" class="btn btn-primary w-100" 
									onclick='hitung(<?=$atlet['usia'];?>, "<?=$atlet['jenis_kelamin'];?>")'>Hasil</button>
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
										<input readonly="" type="text" class="form-control" id="hslpushup" name="hslpushup" value="<?=set_value('hslpushup')?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslsitup"
										name="hslsitup" value="<?=set_value('hslsitup') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslpullup" name="hslpullup" value="<?=set_value('hslpullup') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslgtka" 
										name="hslgtka" value="<?=set_value('hslgtka') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslgtki" 
										name="hslgtki" value="<?=set_value('hslgtki') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hsltarikdorong" name="hsltarikdorong" value="<?=set_value('hsltarikdorong') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslpunggung" name="hslpunggung" value="<?=set_value('hslpunggung') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hsltungkai" name="hsltungkai" value="<?=set_value('hsltungkai') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col">
										<input readonly="" type="text" class="form-control" id="hslwallsquat" name="hslwallsquat" value="<?=set_value('hslwallsquat') ?>">
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

		<div class="col">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Hasil <?=$title ?></h4>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th >No</th>
									<th >Nama</th>
									<th>Tanggal Tes</th>
									<th >Cabang Olahraga</th>
									<th >Push Up</th>
									<th>Sit Up</th>
									<th>Pull Up</th>
									<th >Genggam Tangan Kanan</th>
									<th>Genggam Tangan Kiri</th>
									<th>Tarik dan Dorong</th>
									<th>Punggung</th>
									<th>Tungkai</th>
									<th>Wall Squat</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($count < 1): ?>
									<tr>
										<td colspan="13">
											<div class="alert alert-danger">Data tes tidak ditemukan</div>
										</td>
									</tr>

									<?php else: ?>

										<?php $i = 1 ?>
										<?php foreach ($kekuatan as $dt) : ?>
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
											<td><?=$dt['pushup']?></td>
											<td><?=$dt['situp']?></td>
											<td><?=$dt['pullup']?></td>
											<td><?=$dt['GTKA']?></td>
											<td><?=$dt['GTKI']?></td>
											<td><?=$dt['tarikdorong']?></td>
											<td><?=$dt['punggung']?></td>
											<td><?=$dt['tungkai']?></td>
											<td><?=$dt['wallsquat']?></td>
											<td>
												<a href="<?=base_url('kekuatan/hapusdata/').$atlet['id'].'/'.$dt['id']?>" class="btn btn-sm btn-danger">Hapus</a>
											</td>
										</tr>
									<?php endforeach ?>
								<?php endif ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?=base_url('assets/dist/js/data tes/kekuatan.js') ?>"></script>

		<script type="text/javascript">
			function bersih(){
				document.getElementById('tespushup').value = "";
				document.getElementById('tessitup').value = "";
				document.getElementById('tespullup').value = "";
				document.getElementById('tesgtka').value = "";
				document.getElementById('tesgtki').value = "";
				document.getElementById('testarikdorong').value = "";
				document.getElementById('tespunggung').value = "";
				document.getElementById('testungkai').value = "";
				document.getElementById('teswallsquat').value = "";

				document.getElementById('hslpushup').value = "";
				document.getElementById('hslsitup').value = "";
				document.getElementById('hslpullup').value = "";
				document.getElementById('hslgtka').value = "";
				document.getElementById('hslgtki').value = "";
				document.getElementById('hsltarikdorong').value = "";
				document.getElementById('hslpunggung').value = "";
				document.getElementById('hsltungkai').value = "";
				document.getElementById('hslwallsquat').value = "";
			}
		</script>