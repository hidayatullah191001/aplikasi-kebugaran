<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('home') ?>">Home</a>
								<span>&nbsp > &nbsp</span>
								<a href="<?=base_url('cabor') ?>"> <?=$title ?></a>
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
				<a href="<?= base_url();?>cabor/tambah_cabor" class="btn btn-primary">Tambah Data Cabang Olahraga</a>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-md-6">
				<form class="form-material" action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Cari data cabang olahraga..." name="keyword">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Cari</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<div class="row mt-3">
			<div class="col-12">
				<?php if (empty($cabor)) :  ?>
					<div class="alert alert-danger" role="alert">
						Data Cabang Olahraga tidak ditemukan
					</div>
				<?php endif; ?>
				<?=$this->session->flashdata('message') ?>
				<div class="card p-3">
					<div class="card-body">
						<h3 class="card-title">Daftar atlet</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-hover table-sm">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama Cabang Olahraga</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								?>
								<?php foreach ($cabor as $dt) :?>
									<tr>
										<th scope="row"><?=$i++ ?></th>
										<td><?= $dt['nama_cabor'];?></td>
										<td>
											<a href="<?= base_url(); ?>cabor/edit_cabor/<?= $dt['id']; ?>" class="btn btn-sm btn-success ">Ubah</a>
											<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusCabor<?= $dt['id']; ?>">
												Hapus
											</button>		
											<!-- Modal -->
										</td>
									</tr>
									<?php include 'modal/hapus_cabor.php' ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

