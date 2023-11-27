<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row justify-content-center m-5">
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <?php echo $this->session->flashdata('message') ?>

          <div class="card-body">
            <center>
              <!-- <img src="<?=base_url('assets/assets/images/logo.png') ?>" width="100"> -->
              <h2 class="card-title">Selamat Datang,</h2>
              <h5 class="card-subtitle">Di Aplikasi Tes Fisik Kebugaran!</h5>
            </center>
            <form class="form-horizontal form-material mt-4" method="post" action="<?=base_url('auth')?>">
              <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                  <input type="email" placeholder="Masukkan email kamu..."
                  class="form-control form-control-line" name="email"
                  id="email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                  <input type="password" id="password" name="password" placeholder="Masukkan password kamu..." 
                  class="form-control form-control-line">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="checkbox" name="lihat" id="lihat"> Show Password
                </div>
              </div>
              <br>
              <center>
                <div class="form-group">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-user btn-block">
                      Masuk
                    </button>
                  </div>
                </div>
                <br>
                <div class="col-md-12">
                  <p>Belum punya akun? <a href="<?=base_url('auth/registration') ?>">Register</a></p>
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
