<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title"><?=$title ?></h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url() ?>"><?=$title ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h1>Selamat Datang di Aplikasi Hitung Tes Kebugaran</h1>
        <h5>Aplikasi ini bertujuan untuk mengkakulasi Kebugaran Atlet</h5>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img style="object-fit: cover; height: 150px" src="<?=base_url('assets/assets/images/users/').$user['image'] ?>"
                                class="rounded-circle" width="150"/>
                                <h4 class="card-title m-t-10"><?=$user['nama'] ?></h4>
                                <h6 class="card-subtitle">
                                    <?php if ($user['role_id'] == 2): ?>
                                        <p>Atlet</p>
                                        <?php else : ?>
                                            <p>Administrator</p>
                                        <?php endif ?>
                                    </h6>
                                </div>
                                <div class="col text-center d-flex align-items-center">
                                 <div class="col">
                                     <small class="text-muted">Email</small>
                                     <h6><?=$user['email'] ?></h6>
                                 </div> 
                                 <div class="col">
                                     <small class="text-muted p-t-30 db">NIM</small>
                                     <h6>
                                        <?php if ($user['nim'] == ''): ?>
                                            <p class="text-danger">NIM belum diisi!</p>
                                            <?php else : ?>
                                                <p><?=$user['nim'] ?></p>
                                            <?php endif ?>
                                        </h6>
                                    </div>
                                    <div class="col">
                                     <small class="text-muted p-t-30 db">Prodi</small>
                                     <h6><?php if ($user['prodi'] == ''): ?>
                                     <p class="text-danger">Prodi belum diisi!</p>
                                     <?php else : ?>
                                        <p><?=$user['prodi'] ?></p>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="<?=base_url('user') ?>" class="btn btn-primary"><i class="mdi mdi-account-edit mr-3"></i>Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">   
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <h5>Data Atlet</h5>
                                    <h3><?=count($atlet) ?></h3>
                                </div>
                                <div class="col-3">
                                    <i class="fas fa-fw fa-dollar-sign fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <h5>Cabang Olahraga</h5>
                                    <h3><?=count($cabor) ?></h3>
                                </div>
                                <div class="col-3">
                                    <i class="fas fa-caret-square-up fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>