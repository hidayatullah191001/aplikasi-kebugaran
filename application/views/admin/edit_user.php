<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title"><?=$title ?></h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('admin') ?>">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="<?=base_url('admin/user_management') ?>">Manajemen User</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?=$title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">

		<?=$this->session->flashdata('message') ?>
		<div class="card">
			<div class="card-body">
				<form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
					<input type="text" id="id" name="id" value="<?=$user_edit['id']?>" hidden>
					<div class="form-group">
						<label class="col-md-12">Nama</label>
						<div class="col-md-12">
							<input id="nama" name="nama" type="text" value="<?= $user_edit['nama'] ?>" class="form-control form-control-line">
							<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12">Email</label>
						<div class="col-md-12">
							<input id="email" name="email" type="email" value="<?= $user_edit['email'] ?>" class="form-control form-control-line" readonly>
							<?= form_error('email', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-12">Role</label>
						<div class="col-sm-12">
							<select id="role" name="role" class="form-control form-control-line">
								<?php if ($user_edit['role_id'] == 1): ?>
									<option selected="" value="1"> Administrator</option>
									<option value="2">User</option>
								<?php elseif($user_edit['role_id'] == 2): ?>
										<option value="1">Administrator</option>
										<option selected="" value="2">User</option>
								<?php endif ?>
							</select>
							<?= form_error('role', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-12">Aktif</label>
						<div class="col-sm-12">
							<select id="status" name="status" class="form-control form-control-line">
								<option selected="" disabled="">Pilih Status Akun...</option>
								<?php if ($user_edit['is_active'] == 1): ?>
									<option selected="" value="1"> Aktif</option>
									<option value="0"> Tidak Aktif</option>
								<?php elseif($user_edit['is_active'] == 0): ?>
										<option value="1">Aktif</option>
										<option selected="" value="0">Tidak Aktif</option>
								<?php endif ?>
								</select>
								<?= form_error('status', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>

						<div class="form-group form-check ml-2">
							<input type="checkbox" class="form-check-input" id="cekubah" onclick="ubahpw()">
							<label class="form-check-label" for="exampleCheck1">Ubah Password</label>
						</div>

						<div hidden="" id="formpw" class="row mb-1">
							<div class="form-group col">
								<label class="col-md-12">Password Baru</label>
								<div class="col-md-12">
									<input type="password" placeholder="Masukkan Password Baru..." class="form-control" name="password1" id="password1">
									<?= form_error('password1', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>

							<div class="form-group col">
								<label class="col-md-12">Ulangi Baru</label>
								<div class="col-md-12">
									<input type="password" placeholder="Ulangi Password..." class="form-control" name="password2" id="password2">
								</div>
							</div>

							<div class="form-group mb-3">
								<input hidden="" type="text" name="pwlama" class="form-control" value="<?=$user_edit['password'] ?>" id="pwlama">
							</div>

						</div>
						<div hidden="" id="cekpw" class="form-group form-check ml-2 mb-4">
							<input type="checkbox" class="form-check-input" id="cek" onclick="lihatpw()">
							<label class="form-check-label" for="exampleCheck1">Lihat Password</label>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-success" type="submit">Tambah Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function ubahpw(){
				var cekubah = document.getElementById('cekubah');
				var formpw = document.getElementById('formpw');
				var cekpw = document.getElementById('cekpw');

				if (cekubah.checked == true) {
					formpw.hidden = false;
					cekpw.hidden = false;
				}else{
					formpw.hidden = true;
					cekpw.hidden = true;
				}
			}

			function lihatpw(){

				var cek = document.getElementById('cek');
				var pw1 = document.getElementById('password1');
				var pw2 = document.getElementById('password2');
				if (cek.checked == true) {
					pw1.type = 'text';
					pw2.type = 'text';
				}else{
					pw1.type = 'password';
					pw2.type = 'password';
				}
			}
		</script>