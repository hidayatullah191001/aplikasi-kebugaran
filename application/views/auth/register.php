<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row justify-content-center m-5">
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <div class="card-body">
            <center>
              <!-- <img src="<?=base_url('assets/assets/images/logo.png') ?>" width="100"> -->
              <h2 class="card-title">Daftar Akunmu,</h2>
              <h5 class="card-subtitle">Isi form dibawah ini dengan benar!</h5>
            </center>
            <form class="form-horizontal form-material mt-4" method="POST" action="<?=base_url('auth/registration') ?>">
              <div class="form-group">
                <label for="example-email" class="col-md-12">Nama Lengkap</label>
                <div class="col-md-12">
                  <input type="text" placeholder="Masukkan nama kamu..." class="form-control form-control-line" name="name" id="name" value="<?= set_value('name') ?>">
                  <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                </div>
                
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                  <input type="text" placeholder="Masukkan email kamu..."class="form-control form-control-line" name="email" id="email" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                      <input type="password" id="password" name="password" placeholder="Masukkan password kamu..." value="<?= set_value('password') ?>" 
                      class="form-control form-control-line">
                      <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                  </div>
                  <div class="col">
                    <label class="col-md-12">Ulangi password</label>
                    <div class="col-md-12">
                      <input type="password" id="password1" name="password1" placeholder="Ulangi password kamu..." value="<?= set_value('password1') ?>"
                      class="form-control form-control-line">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="checkbox" name="lihatregister" id="lihatregister"> Show Password
                </div>
              </div>
              <br>
              <center>
                <div class="form-group">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Daftar akun
                    </button>
                  </div>
                </div>
                <br>
                <div class="col-md-12">
                  <p>Sudah punya akun? <a href="<?=base_url('auth') ?>">Masuk disini</a></p>
                  <a href="<?=base_url('landing') ?>">Kembali ke Halaman Utama</a>
                </div>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
