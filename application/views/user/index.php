<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('bendahara') ?>">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?=$title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<?=$this->session->flashdata('message') ?>
		<div class="row">
			<!-- Column -->
			<div class="col-lg-4 col-xlg-3 col-md-5">
				<div class="card">
					<div class="card-body">
						<center class="m-t-30"> <img style="object-fit: cover; height: 150px" src="<?=base_url('assets/assets/images/users/').$user['image'] ?>"
							class="rounded-circle" width="150"/>
							<h4 class="card-title m-t-10"><?=$user['nama'] ?></h4>
							<h6 class="card-subtitle">
								<?php if ($user['role_id'] == 2): ?>
									<p>Atlet</p>
									<?php else : ?>
										<p>Administrator</p>
									<?php endif ?>
								</h6>
							</center>
						</div>
						<hr>
						<div class="card-body">
							<small class="text-muted">Email</small>
							<h6><?=$user['email'] ?></h6> 
							<small class="text-muted p-t-30 db">NIM</small>
							<h6><?php if ($user['nim'] == ''): ?>
							<p class="text-danger">NIM belum diisi!</p>
							<?php else : ?>
								<p><?=$user['nim'] ?></p>
							<?php endif ?>
						</h6> 
						<small class="text-muted p-t-30 db">Prodi</small>
						<h6><?php if ($user['prodi'] == ''): ?>
						<p class="text-danger">Prodi belum diisi!</p>
						<?php else : ?>
							<p><?=$user['prodi'] ?></p>
						<?php endif ?>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-8 col-xlg-9 col-md-7">
				<div class="card">
					<div class="card-body">
						<form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-md-12">Nama Lengkap</label>
								<div class="col-md-12">
									<input id="nama" name="nama" type="text" placeholder="Masukkan nama lengkap..." value="<?=$user['nama'] ?>"  class="form-control form-control-line">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">NIM</label>
								<div class="col-md-12">
									<input id="nim" name="nim" type="text" placeholder="Masukkan nim lengkap..." value="<?=$user['nim'] ?>"  class="form-control form-control-line">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Prodi</label>
								<div class="col-md-12">
									<input id="prodi" name="prodi" type="text" placeholder="Masukkan prodi lengkap..." value="<?=$user['prodi'] ?>"  class="form-control form-control-line">
								</div>
							</div>
							<div class="form-group">
								<label for="example-email" class="col-md-12">Email</label>
								<div class="col-md-12">
									<input id="email" name="email" type="email" class="form-control form-control-line" value="<?=$user['email'] ?>" readonly>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-12">Image Profile</label>
								<div class="col-md-12">
									<input id="image" name="image" type="file" class="form-control form-control-line">
								</div>
							</div>


							<div class="form-group">
								<div class="col-sm-12">
									<button class="btn btn-success" type="submit">Update Profile</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>