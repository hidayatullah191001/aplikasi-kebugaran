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
								<a href="<?=base_url('admin/user_management') ?>"> <?=$title ?></a>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row mt-3">
			<div class="col-12">
				<?=$this->session->flashdata('message') ?>
				<div class="card p-3">
					<div class="card-body">
						<h3 class="card-title">Data Akun User</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-hover table-sm">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama User</th>
									<th scope="col">Email User</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								?>
								<?php foreach ($data_user as $dt) :?>
									<tr>
										<th scope="row"><?=$i++ ?></th>
										<td><?= $dt['nama'];?></td>
										<td><?= $dt['email'];?></td>
										<td>
											<?php if ($dt['is_active'] == 1): ?>
												<span class="badge badge-success">Aktif</span>
											<?php else : ?>
												<span class="badge badge-danger">Tidak Aktif</span>
											<?php endif ?>
											
										</td>
										<td>
											<a href="<?=base_url('admin/user_edit/').$dt['id'] ?>" class="btn btn-warning btn-sm"> Edit</a>
											<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusUser<?=$dt['id'];?>">
												Hapus
											</button>
										</td>
									</tr>
									<?php include 'modal/hapus_user.php' ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

