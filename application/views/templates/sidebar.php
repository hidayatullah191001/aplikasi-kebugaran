
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <?php if ($user['role_id'] == 2): ?>
                <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="mb-3">
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img style="object-fit: cover; width: 50px; height: 50px; " src="<?=base_url('assets/assets/images/users/').$user['image'] ?>" alt="users"
                            class="rounded-circle" /></div>
                            <div class="user-content hide-menu m-l-10">
                                <h5 class="m-b-0 user-name font-medium"><?=$user['nama'] ?></h5>
                                <span class="op-5 user-email"><?=$user['email'] ?></span>
                            </a>

                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('home')?>" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('atlet') ?>" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">Data Atlet</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('cabor') ?>" aria-expanded="false">
                        <i class="mdi mdi-playlist-plus"></i>
                        <span class="hide-menu">Data Cabang Olahraga</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('tes') ?>" aria-expanded="false">
                        <i class="mdi mdi-playlist-plus"></i>
                        <span class="hide-menu">Tes Fisik</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('cetak') ?>" aria-expanded="false">
                        <i class="mdi mdi-printer"></i>
                        <span class="hide-menu">Cetak</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('user') ?>" aria-expanded="false">
                        <i class="mdi mdi-account-edit"></i>
                        <span class="hide-menu">Edit Profile</span>
                    </a>
                </li>

                <li class="text-center p-40 upgrade-btn">
                    <a href="<?=base_url('auth/logout') ?>"class="btn btn-block btn-danger text-white">Logout</a>
                </li>
            </ul>

            <?php elseif($user['role_id'] == 1): ?>  <!-- Sidebar Login Sebagai Admin -->
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="mb-3">
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src="<?=base_url('assets/') ?>assets/images/users/1.jpg" alt="users"
                            class="rounded-circle" width="40" /></div>
                            <div class="user-content hide-menu m-l-10">
                                <h5 class="m-b-0 user-name font-medium"><?=$user['nama'] ?></h5>
                                <span class="op-5 user-email"><?=$user['email'] ?></span>
                            </a>

                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('admin')?>" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('admin/user_management') ?>" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">Data User</span>
                    </a>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('admin/cabor') ?>" aria-expanded="false">
                        <i class="mdi mdi-playlist-plus"></i>
                        <span class="hide-menu">Data Cabang Olahraga</span>
                    </a>
                </li>
                <li class="text-center p-40 upgrade-btn">
                    <a href="<?=base_url('auth/logout') ?>"class="btn btn-block btn-danger text-white">Logout</a>
                </li>
            </ul>
            <?php endif ?>

        </nav>
    </div>
    <!-- End Sidebar scroll-->
</aside>