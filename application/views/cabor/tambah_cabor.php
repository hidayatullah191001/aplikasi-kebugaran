<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?=base_url('home') ?>">Home</a>
								<span>&nbsp > &nbsp</span>
								<a href="<?=base_url('cabor') ?>">Data Cabang Olahraga</a>
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
						Form Tambah Data Cabang Olahraga
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="nama">Nama Cabang Olahraga</label>
								<input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan cabang olahraga baru">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							
							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>