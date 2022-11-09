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