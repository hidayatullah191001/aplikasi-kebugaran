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
						Detail Data Atlet
					</div>
					<div class="card-body">
						<h5 class="card-title"><?= $atlet['nama']; ?></h5>
						<h6 class="card-subtitle mb-2 text-muted"><?= $atlet ['email'];?></h6>
						<div class="card-text">Usia : <?= $atlet['usia']; ?></div>
						<div class="card-text mb-4">Jenis Kelamin : <?= $atlet['jenis_kelamin']; ?></div>
						<a href="<?=base_url('atlet');?>" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>