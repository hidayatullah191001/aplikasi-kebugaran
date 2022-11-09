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
								<a href="<?=base_url('tes') ?>"> <?=$title ?></a>
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
				<form class="form-material" action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Cari data atlet..." name="keyword">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Cari</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-12">
				<?php if (empty($atlet)) :  ?>
					<div class="alert alert-danger" role="alert">
						Data atlet tidak ditemukan
					</div>
				<?php endif; ?>
				<?=$this->session->flashdata('message') ?>
				<div class="card p-3">
					<div class="card-body">
						<h3 class="card-title">Daftar Atlet</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama Atlet</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								?>
								<?php foreach ($atlet as $atl) :?>
									<tr>
										<th scope="row"><?=$i++ ?></th>
										<td><?= $atl['nama'];?></td>
										<td>
											<a href="<?= base_url('tes/halaman_tes/').$atl['id']?>" class="btn btn-sm btn-primary ">Lakukan Tes</a>		
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

