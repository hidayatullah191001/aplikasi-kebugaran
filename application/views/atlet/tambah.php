<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?=base_url() ?>">Home</a>
								<span>&nbsp > &nbsp</span>
								<a href="<?=base_url('atlet') ?>">Data Atlet</a>
								<span>&nbsp > &nbsp</span>
								<span><?=$title ?></span>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Form Tambah Data Atlet
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="nama" class="form-control" id="nama" name="nama">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email">
								<small class="form-text text-danger"><?= form_error('email'); ?></small>
							</div>
							<div class="form-group">
								<label for="email">Usia</label>
								<input type="number" class="form-control" id="usia" name="usia" value="16" min="16" max="30">
								<small class="form-text text-danger"><?= form_error('email'); ?></small>
							</div>
							<div class="form-group">
								<label for="jurusan">Jenis Kelamin</label>
								<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
									<option selected="" disabled="">Pilih jenis kelamin...</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>